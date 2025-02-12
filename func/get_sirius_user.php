<?php
// ini_set('display_errors', 1);


// $upload_path = "/var/www/uploads";

if($_SERVER['SERVER_NAME'] == 'sirius-i.test'){
  $sirius_tld = 'http://sirius-i.test';
  $db_host = '127.0.0.1';
  $db_user = "root";
  $db_pass = "";
  $db_name = "sirius";
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
}else{
  $sirius_tld = 'https://sirius-i.svpetroleum.com.my';
  $servername = "192.168.8.248";
  $username = "admin";
  $password = "svp@!@#";
  $mydb="sirius";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $mydb);
}



 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// $emp_id =strtoupper($_REQUEST['emp_id']);
$result = array();
$name = strtoupper($_REQUEST['name']);
if ($name != '' && strlen($name) >= 3) {
    // $query = mysqli_query($conn, "SELECT name, email, position FROM personal_detail where emp_id = '$emp_id'");
    $sql = "SELECT pd.name, pd.email, ed.position FROM personal_detail pd LEFT JOIN emp_detail ed ON pd.emp_id = ed.emp_id WHERE name like '%$name%' AND (pd.email IS NOT NULL OR pd.email != '')";
    $query = mysqli_query($conn, $sql );
    // die ($sql);
    while ($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
    };
    // $fullname = $row['name'];
    // $email = $row['email'];
    // $position = $row['position'];
}
header('Content-Type: application/json');
// $result = array("$fullname", "$email", "$position");
$myJSON = json_encode($result);
echo $myJSON;
?>
