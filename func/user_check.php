<?php
// session_start();
// echo "Session list<br/>";
// foreach ($_SESSION as $key=>$value){
//     echo "<b>".$key."</b>".": ".$value."<br/>";
// }
if(isset($_SESSION['uid']) && $_SESSION['uid'] != ''){
    $user_id=$_SESSION['uid'];
    $qry = "SELECT * FROM users WHERE id = $user_id";
    // echo $qry;
    $res = mysqli_query($conn, $qry);
    while ($row = mysqli_fetch_array($res)){
       $user_fullname = $row['fullname'];
       $designation = $row['designation'];
       $user_email = $row['username'];
       $user_avatar = $row['avatar'];
       $user_mobile = $row['mobile'];
       $user_empid = $row['emp_id'];
       $user_company = $row['company'];
    }
    // if($_SERVER['SCRIPT_NAME'] != '/main.php'){
    //     header('Location: /main.php');
    // }
}else{
    if($_SERVER['SCRIPT_NAME'] != '/index.php'){
        header('Location: /index.php');
    }
}
?>
