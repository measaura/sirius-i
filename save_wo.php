<?php
include_once 'includes/db_func.php';
include_once 'func/email_func.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $wo_no = $_POST['wo_no'];
    $level = intval($_POST['level']);
    $creator_id = intval($_POST['creator_id']);
    $assign_id = intval($_POST['assign_id']);
    $item_ids = $_POST['item-id'];
    $item_ids_array = explode(',', $item_ids); // Convert comma-separated string to array
    $chk_visual = isset($_POST['visual']) ? 1 : 0;
    $chk_disassembly = isset($_POST['disassembly']) ? 1 : 0;
    $chk_mpi = isset($_POST['mpi']) ? 1 : 0;
    $chk_dimensional = isset($_POST['dimensional']) ? 1 : 0;
    $chk_gauge = isset($_POST['gauge']) ? 1 : 0;
    $chk_assembly = isset($_POST['assembly']) ? 1 : 0;
    $chk_pressure = isset($_POST['pressure']) ? 1 : 0;

    // Insert into work_order table
    $sql = "INSERT INTO work_order ( wo_no, level, chk_visual, chk_dissassembly, chk_mpi, chk_dimension, chk_gauge, chk_assembly, chk_pressure, wo_items, assign_to, created_by,  request_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    // die($sql);
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siiiiiiiisii", $wo_no, $level, $chk_visual, $chk_disassembly, $chk_mpi, $chk_dimensional, $chk_gauge, $chk_assembly, $chk_pressure, $item_ids, $assign_id, $creator_id);
    $stmt->execute();
    $wo_id = $stmt->insert_id;
    $stmt->close();

    // Insert into work_order_items table
    foreach ($item_ids_array as $item_id) {
        $sql = "INSERT INTO wo_items (wo_id, item_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $wo_id, $item_id);
        $stmt->execute();
        $stmt->close();
    }

    // Get superior email
    $sql = "SELECT u.username FROM user_hierarchy uh
            JOIN users u ON uh.superior_id = u.id
            WHERE uh.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $assign_id);
    $stmt->execute();
    $stmt->bind_result($superior_email);
    $stmt->fetch();
    $stmt->close();

    // Send notification email
    if ($superior_email) {
        // $subject = "New Work Order Assigned";
        // $message = "A new work order (WO No: $wo_no) has been assigned.";
        // $headers = "From: no-reply@sirius-i.com";
        // $output='<p>You have been invited as the SIRIUS-I manager. Please click the button below to confirm your email address.</p>';
        // $output.='<p>-------------------------------------------------------------</p>';
        // $output.='<p><a href="'.$sirius_tld.'/confirmmail.php?key='.$key.'&email='.$email.'&action=confirm" target="_blank">
        // '.$sirius_tld.'/confirmmail.php?key='.$key.'&email='.$email.'&action=confirm</a></p>';		
        // $output.='<p>-------------------------------------------------------------</p>';
        // $output.='<p>Please be sure to copy the entire link into your browser.';
        $output.='<p>A new work order (WO No: $wo_no) has been created. Please click the button below to approve the request of the work order creation.</p>';
        // $output.='<p>If you did not register to SIRIUS-I, no action is needed.</p>'; 
        $body = $output; 
        $subject = "New Work Order Assigned - SIRIUS-I";
        $title = "SIRIUS-I Work Order";
        $buttontxt = "Approve Work Order";
        $buttonlink = $sirius_tld.'/approve-wo.php?key='.$key.'&email='.$email.'&action=confirm';

        sendEmail($email,$subject,$title,$body,$buttontxt,$buttonlink,$email);
        // session_start();
        $message = "The mail invite link has been sent to the  email address.";
        $status = "success";

    } else {
        $message = "Superior not found";
        $status = "error";
    }

    // echo json_encode(['type' => 'success', 'text' => 'Work order created successfully.']);
} else {
    $message = "Invalid request method";
    $status = "error";
}
$response = [
  'message' => $message,
  'status' => $status
];

echo json_encode($response);
?>