<?php
header('Content-Type: application/json');

// Database connection
include_once '../includes/db_func.php';
// if($_SERVER['SERVER_NAME'] == 'sirius-i.test'){
//   $sirius_tld = 'http://sirius-i.test';
//   $db_host = '127.0.0.1';
//   $db_user = "root";
//   $db_pass = "";
//   $db_name = "sirius";
//   $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// }else{
//   $sirius_tld = 'https://sirius-i.svpetroleum.com.my';
//   $servername = "192.168.8.248";
//   $username = "admin";
//   $password = "svp@!@#";
//   $mydb="sirius";
//   // Create connection
//   $conn = mysqli_connect($servername, $username, $password, $mydb);
// }

// // Check connection
// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }

$result = array();

$name = strtoupper($_REQUEST['name']);
// Construct the SQL query with LIKE operator for partial matching
if($name != '' && strlen($name) >= 3){
    $sql = "SELECT id, fullname, designation FROM users";
    if(isset($_REQUEST['superior']) && $_REQUEST['superior']=='true'){
        $sql .= " WHERE fullname IN (
        'SYAZRIN BIN SAAD'
        ,'IMRAN BIN AKOP'
        ,'MUHAMMAD SHAFIQ BIN HASHIM'
        ,'MOHD HAFIZAN BIN ABDUL MANAN'
        ,'SUPRAYETNO'
        ,'TING JECK ING'
        ,'MOHD SABRI BIN ABU BAKAR'
        ,'RONALD PETER RAMNARINE KINGLAND'
        ,'ROSAZLI BIN BONI'
        ,'CHOO DER JIUN'
        ,'MOHD SHAFUAN BIN AZIZAN'
        ,'MOHD ZULHAIZAN BIN MOHD NOOR'
        ,'MOHD SHAHRIN BIN SAAD'
        ,'NOR ATIQAH BINTI ZAINAL'
        ,'HAIRULIZAM BIN HASSAN'
        ,'MUHAMMAD AIMAN ARIF BIN ROSLAN'
        ,'KHAIRON NAZRI BIN SAIFUL RIJAL'
        ,'NOR ZURAIDAH BINTI ABDUL AR\'RIF'
        ,'SHAHARUM BIN RAMLI'
        ,'NORSHAZLEIZA BINTI MOHD SURU'
        ,'ANUAR HASBUL\'LAH BIN ABOO HASHIM @ HASHI'
        ,'AHMAD FARHAN BIN IBERAHIM'
        ,'AHMAD RIZAL BIN MOHD MAHAIYUDIN'
        ,'NUR IZZATI BINTI MOHD FIDZRUS'
        ,'MUHAMMAD \'ATHUF BIN YUNUS'
        ,'SHALIFIKA BIN SHAIR @ SHAKER'
        ,'AFFANDI BIN ABDUL RAZAK'
        ,'SHAHRUL NIZAM BIN MOHAMED RAZALI'
        ,'MOHAMAD DANIAL BIN OTHMAN'
        ,'HENDRI BIN AFRIZAL'
        ,'SYAHNUR ADZAM BIN MOHD NASIR'
        ) AND";
    }else{
        $sql .= " WHERE";
    }
    $sql .= " fullname LIKE '%$name%'";

// $like_clauses = [];
// foreach ($names as $name) {
//     $like_clauses[] = "pd.name LIKE '%$name%'";
// }
// $sql .= implode(' OR ', $like_clauses) . ")";
// die($sql);
$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

header('Content-Type: application/json');
echo json_encode($result);
}
$conn->close();
?>