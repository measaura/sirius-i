<?php
include_once 'includes/db_func.php';
include_once 'func/email_func.php';

if($_SERVER['SERVER_NAME'] == 'sirius-i.test'){
    $sirius_tld = 'http://sirius-i.test';
 }else{
    $sirius_tld = 'https://sirius-i.svpetroleum.com.my';
 }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $wo_no = $_POST['wo_no'];
    $level = intval($_POST['level']);
    $creator_id = intval($_POST['creator_id']);
    $assign_id = intval($_POST['assign_id']);
    $item_ids = $_POST['item-id'];
    $item_ids_array = explode(',', $item_ids); // Convert comma-separated string to array
    $tests = [];
    if (isset($_POST['visual']) && $_POST['visual'] == 1) {
        $tests['visual'] = 1;
    }
    if (isset($_POST['disassembly']) && $_POST['disassembly'] == 1) {
        $tests['disassembly'] = 1;
    }
    if (isset($_POST['mpi']) && $_POST['mpi'] == 1) {
        $tests['mpi'] = 1;
    }
    if (isset($_POST['dimensional']) && $_POST['dimensional'] == 1) {
        $tests['dimensional'] = 1;
    }
    if (isset($_POST['gauge']) && $_POST['gauge'] == 1) {
        $tests['gauge'] = 1;
    }
    if (isset($_POST['assembly']) && $_POST['assembly'] == 1) {
        $tests['assembly'] = 1;
    }
    if (isset($_POST['pressure']) && $_POST['pressure'] == 1) {
        $tests['pressure test'] = 1;
    }

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
        $item_record_id = $stmt->insert_id;
        $stmt->close();

        // Insert into wo_tests table
        foreach ($tests as $test_type => $test_result) {
            $sql = "INSERT INTO wo_tests (item_id, test_type, test_result) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isi", $item_record_id, $test_type, $test_result);
            $stmt->execute();
            $stmt->close();
        }
    }

    // Get superior email
    $sql = "SELECT u.username, u.fullname FROM user_hierarchy uh
            JOIN users u ON uh.superior_id = u.id
            WHERE uh.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $assign_id);
    $stmt->execute();
    $stmt->bind_result($superior_email, $superior_name);
    $stmt->fetch();
    $stmt->close();

    // Send notification email
    if ($superior_email) {
        $email = $superior_email;
        // $subject = "New Work Order Assigned";
        // $message = "A new work order (WO No: $wo_no) has been assigned.";
        // $headers = "From: no-reply@sirius-i.com";
        $output ='<p>A new work order (WO No: '.$wo_no.') has been created. Please click the button below to approve the request of the work order creation.</p>';
        // $output.='<p>If you did not register to SIRIUS-I, no action is needed.</p>'; 
        $body = $output; 
        $subject = "New Work Order Created ($wo_no)";
        $title = "New SIRIUS-I Work Order";
        $buttontxt = "Approve Work Order";
        $buttonlink = $sirius_tld.'/approve-wo.php?wo='.$wo_no.'&action=confirm';

        sendEmail($email,$subject,$title,$body,$buttontxt,$buttonlink,$superior_name);
        // session_start();
        $message = "A new work order (WO No: $wo_no) has been created.";
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
  'text' => $message,
  'type' => $status
];

header('Content-Type: application/json');
echo json_encode($response);
?>