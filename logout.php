<?php
session_start();
require_once 'includes/db_func.php';
$user_id=$_SESSION['uid'];
//     $sql="INSERT INTO user_log (emp_id,username,activity) VALUE ('{$_SESSION['emp_id']}','{$_SESSION['username']}','logout')";
//     // echo $sql;
//     $result= mysqli_query($conn, $sql);
if(isset($_SESSION['username'])){
    $updsql="UPDATE users SET logindate = now(), islogin = 0 where id = $user_id";
    if($resupd=mysqli_query($conn,$updsql)){
        if (isset($_SESSION))
        {
            session_unset();
            session_destroy();
            session_start();
            $_SESSION['message']="You have successfully logged out";
            header('Location: index.php');
            exit;
        }
    }else{
        echo "ERROR $updsql - ".mysqli_error($conn);
    }
}else{
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['message']="You have successfully logged out";
    header('Location: index.php');
    exit;
}




