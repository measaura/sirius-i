<?php
// ini_set('display_errors', 1);
$servername = "192.168.8.248";
$username = "admin";
$password = "svp@!@#";
$mydb="sirius";
// $upload_path = "/var/www/uploads";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $mydb);


 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$emp_id =strtoupper($_REQUEST['emp_id']);
if ($emp_id != ''){
    $query = mysqli_query($conn, "SELECT name, email, position FROM personal_detail where emp_id = '$emp_id'");
    $row = mysqli_fetch_array($query);
    $fullname = $row['name'];
    $email = $row['email'];
    $position = $row['position'];
}

$result = array("$fullname", "$email", "$position");
$myJSON = json_encode($result);
echo $myJSON;
?>
