<?php
include_once 'includes/db_func.php';
include_once 'func/email_func.php'; // Assuming you have an email function in this file
if($_SERVER['SERVER_NAME'] == 'sirius-i.test'){
    $sirius_tld = 'http://sirius-i.test';
 }else{
    $sirius_tld = 'https://sirius-i.svpetroleum.com.my';
 }


$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $workOrderId = $_POST['id'];
    $uid = $_SESSION['uid'];

    // Update the work_order table to set the accept_date
    $sql = "UPDATE work_order SET accept_date = NOW(), status = '2' WHERE wo_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $workOrderId);

    if ($stmt->execute()) {
        // Fetch the approved_by email
        $sql = "SELECT u.username, u.fullname, wo_no FROM users u JOIN work_order wo ON u.id = wo.approved_by WHERE wo.wo_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $workOrderId);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $approvedByEmail = $row['username'];
        $name = $row['fullname'];
        $wo_no = $row['wo_no'];

        // Send email notification
        $message = "The work order with ID $workOrderId has been accepted.";
        $headers = "From: no-reply@yourdomain.com";


        // Send notification email
        if ($approvedByEmail) {
          $subject = "Work Order Accepted";
          $body = "<p>The work order <b>$wo_no</b> has been accepted.</p>";
          $title = "Accepted SIRIUS-I Work Order";
          $buttontxt = '';
          $buttonlink = '';
          $email = $approvedByEmail;
  
      }

        if (sendEmail($email,$subject,$title,$body,$buttontxt,$buttonlink,$name)) {
            $response['type'] = 'success';
            $response['text'] = 'Work order accepted and email notification sent.';
        } else {
            $response['type'] = 'error';
            $response['text'] = "Work order accepted but failed to send email notification to $email.";
        }
    } else {
        $response['type'] = 'error';
        $response['text'] = 'Failed to accept work order.';
    }

    $stmt->close();
} else {
    $response['type'] = 'error';
    $response['text'] = 'Invalid request method.';
}

echo json_encode($response);
?>