<?php
// session_start();
// echo "Session list<br/>";
// foreach ($_SESSION as $key=>$value){
//     echo "<b>".$key."</b>".": ".$value."<br/>";
// }
if(isset($_SESSION['uid']) && $_SESSION['uid'] != ''){
    $user_id=$_SESSION['uid'];
}else{
    header('Location: index.php');
}
$qry = "SELECT * FROM users WHERE id = $user_id";
// echo $qry;
$res = mysqli_query($conn, $qry);
while ($row = mysqli_fetch_array($res)){
   $user_fullname = $row['fullname'];
   $designation = $row['designation'];
   $user_email = $row['username'];
   $user_avatar = $row['avatar'];
}
?>
