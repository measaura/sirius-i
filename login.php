<?php
require_once 'includes/db_func.php';
// ================= Ni untuk debug form POST ====================
// 
// foreach($_POST as $key=>$value){
// 	echo $key.": ".$value."<br/>";
// }
// echo "Files<br/>";
// print_r($_FILES);
// 
// ================= Ni untuk debug form POST ====================

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$redirect = $_POST['url'];
// die($redirect);

$sql="SELECT * FROM users WHERE username='$username'";
// echo $sql; 
if($result= mysqli_query($conn, $sql)){
    if (mysqli_num_rows($result)==1)
    {
        // echo "found";
        while($row = mysqli_fetch_assoc($result)) {
            // $_SESSION['catcode'] = $row['cat'];
            // $_SESSION['emp_id'] = $row['emp_id'];
            $password_hash = $row['password'];
            $fullname = $row['fullname'];
            $user_id = $row['id'];
            $emp_id = $row['emp_id'];
            $uac = $row['access_level'];
            if(password_verify($password ,$password_hash)){
                $updsql="UPDATE users SET logindate = now(), islogin = 1 where id = $user_id";
                if($resupd=mysqli_query($conn,$updsql)){
                    // $_SESSION['message'] = "You are logged in";
                    $_SESSION['username'] = $username;
                    $_SESSION['last_time']=time();
                    $_SESSION['uid']=$user_id;
                    $_SESSION['uac']=$uac;
                    if($uac >= 3){
                        $_SESSION['admin'] = 1;
                    }
                    // echo "success";
                    if(isset($redirect)){
                        header("Location: ./$redirect");
                    }else{
                        header("location: ./main.php");
                    }
                }else{
                    echo "ERROR $updsql - ".mysqli_error($conn);
                }
            } else {
                $_SESSION['message']="username/password incorrect";
                $_SESSION['msgtype']="error";
                // echo "Incorrect username / password dalam";
                header("location: index.php");
            }

        }
        // $sql="SELECT p.name, d.department, d.division FROM personal_detail p, emp_detail d WHERE p.emp_id = d.emp_id AND p.emp_id='{$_SESSION['emp_id']}'";
        // $result= mysqli_query($conn, $sql);
        // if (mysqli_num_rows($result)==1)
        // {
        //     while($row = mysqli_fetch_assoc($result)) {
        //         $_SESSION['name'] = $row['name'];
        //         $_SESSION['department'] = $row['department'];
        //         $_SESSION['division'] = $row['division'];
        //         // echo $row['name'];
        //     }
        // }

        
        // $sql="INSERT INTO user_log (emp_id,username,activity) VALUE ('{$_SESSION['emp_id']}','{$_SESSION['username']}','login')";
        // $result= mysqli_query($conn, $sql);
        
        // header("location: ./main.php");
        
        // letak insert query kat sini sebelum echo success

        
    } else {
        $_SESSION['message']="username/password incorrect";
        $_SESSION['msgtype']="error";
        // echo "Incorrect username / password luar";
        header("location: index.php");
    }
}else{
    echo "ERROR: $sql - ". mysqli_error($conn);
}
?>