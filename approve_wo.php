<?php
include_once 'includes/db_func.php';
include_once 'func/email_func.php'; // Assuming you have an email function in this file
if($_SERVER['SERVER_NAME'] == 'sirius-i.test'){
    $sirius_tld = 'http://sirius-i.test';
 }else{
    $sirius_tld = 'https://sirius-i.svpetroleum.com.my';
 }

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $workOrderId = intval($_POST['id']);

    // Update work order status to 'approved'
    $sql = "UPDATE work_order SET status = 1 WHERE wo_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $workOrderId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Fetch the assigned_to user's email
        $sql2 = "SELECT u.username, u.fullname, wo.wo_no FROM work_order wo
                JOIN users u ON wo.assign_to = u.id
                WHERE wo.wo_id = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i", $workOrderId);
        $stmt2->execute();
        $stmt2->bind_result($email, $name, $wo_no);
        $stmt2->fetch();
        $stmt2->close();

        // Send notification email
        if ($email) {
            $subject = "Work Order Assigned";
            $body = "<p>A new work order (WO No: '.$wo_no.') has been assigned to you. Please click the button below to accept the work order.</p>";
            $title = "New SIRIUS-I Work Order";
            $buttontxt = "Accept Work Order";
            $buttonlink = $sirius_tld.'/accept-wo.php?id='.$workOrderId.'&action=confirm';
    
            sendEmail($email,$subject,$title,$body,$buttontxt,$buttonlink,$name);
        }

        echo json_encode(['type' => 'success', 'text' => 'Work order approved successfully.']);
    } else {
        echo json_encode(['type' => 'error', 'text' => 'Failed to approve work order.']);
    }
    $stmt->close();

}
?>