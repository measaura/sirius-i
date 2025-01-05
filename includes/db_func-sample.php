<?php
$db_host = '127.0.0.1';
$db_user = "username";
$db_pass = "password";
$db_name = "sirius-i";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn) {
    //echo 'connected';
}
?>