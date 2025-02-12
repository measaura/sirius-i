<?php
// ini_set('display_errors', 1);


// $upload_path = "/var/www/uploads";

if($_SERVER['SERVER_NAME'] == 'sirius-i.test'){
  $sirius_tld = 'http://sirius-i.test';
  $db_host = '127.0.0.1';
  $db_user = "root";
  $db_pass = "";
  $db_name = "sirius";
  $db1 = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
}else{
  $sirius_tld = 'https://sirius-i.svpetroleum.com.my';
  $servername = "192.168.8.248";
  $username = "admin";
  $password = "svp@!@#";
  $mydb="sirius";
  // Create connection
  $db1 = mysqli_connect($servername, $username, $password, $mydb);
}

 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

include_once '../includes/db_func.php';

// $emp_id =strtoupper($_REQUEST['emp_id']);
$result = array();
$name = strtoupper($_REQUEST['name']);
if ($name != '' && strlen($name) >=3) {
  // Fetch data from remote server (db1)
    // $query = mysqli_query($db1, "SELECT name, email, position FROM personal_detail where emp_id = '$emp_id'");
    $sql = "SELECT pd.name, pd.email, ed.position FROM personal_detail pd LEFT JOIN emp_detail ed ON pd.emp_id = ed.emp_id WHERE name like '%$name%' AND (pd.email IS NOT NULL OR pd.email != '')";
    $query = mysqli_query($db1, $sql );
    // die ($sql);
    $remote_names = array();
    while ($row = mysqli_fetch_assoc($query)){
      $remote_names[] = $row['name'];
      $result[] = $row;
    };
    // $fullname = $row['name'];
    // $email = $row['email'];
    // $position = $row['position'];

    // Fetch data from local server (db2)
    if (!empty($remote_names)) {
      $remote_names_str = "'" . implode("','", $remote_names) . "'";
      $sql_local = "SELECT fullname FROM users WHERE fullname IN ($remote_names_str)";
      // die($sql_local);
      $query_local = mysqli_query($conn,$sql_local);
      
      $local_names = array();
      while ($row = mysqli_fetch_assoc($query_local)) {
          $local_names[] = $row['fullname'];
      }
// print_r($local_names);
      // Filter out names that are in local db2
      $result = array_filter($result, function($row) use ($local_names) {
          return !in_array($row['name'], $local_names);
      });
    }
}

header('Content-Type: application/json');
// $result = array("$fullname", "$email", "$position");
// $myJSON = json_encode($result);
// echo $myJSON;
echo json_encode(array_values($result));
?>
