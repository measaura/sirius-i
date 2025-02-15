<?php
// session_start();
require_once 'includes/db_func.php';
$toastmsg = '';
$toasttype = '';
if (isset($_SESSION['message']) && $_SESSION['message']!= ''){
    $toastmsg = $_SESSION['message'];
}
if(isset($_SESSION['msgtype'])&&$_SESSION['msgtype']!=''){
    $toasttype = $_SESSION['msgtype'];
}

unset($_SESSION['message']);
unset($_SESSION['msgtype']);

$error="";
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"]=="confirm") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $qry = "SELECT * FROM `users` WHERE `hash_id`='".$key."' and `username`='".$email."' AND `confirm` = 0";
  // die( $qry);
  $query = mysqli_query($conn, $qry );
  $row = mysqli_num_rows($query);
  // echo $row;
  if ($row==0){
    $error .= '<h2>Invalid Link</h2>
    <p>The link is invalid/expired. Either you did not copy the correct link
    from the email, or you have already used the key in which case it is 
    deactivated.</p>
    <p><a href="forgotpass.php">
    Click here</a> to reset password.</p>';
    $_SESSION['message'] = "The link is invalid/expired. <br/>Please contact SIRIUS-I administrator.";
    $_SESSION['msgtype'] = "error";
	}else{
    $row = mysqli_fetch_assoc($query);
    $user_id = $row['id'];
    $username = $row['username'];
    $uac = $row['access_level'];
    $expDate = $row['exp_date'];
    if ($expDate >= $curDate){
      include_once 'confirmmail-content.php';
    }else{
      // echo ("Error link expired below");
      $error .= "<h2>Link Expired</h2>
      <p>The link is expired. You are trying to use the expired link which 
      is valid only 24 hours (1 days after request).<br /><br /></p>";
      $_SESSION['message'] = "The link is expired after 24 hours. Please register again.";
      $_SESSION['msgtype'] = "error";

      $qry = "DELETE FROM `login` WHERE `hash_id`='".$key."' and `username`='".$email."' AND `confirm` = 0";
      // die($qry);
      mysqli_query($conn, $qry);
    }
  }
  if($error!=""){
    // echo "<div class='error'>".$error."</div><br />";
    header('Location: index.php');
    // header('Location: sesstest.php');
  }		
  // isset email key validate end	
}elseif(isset($_POST["username"]) && isset($_POST["action"]) && ($_POST["action"]=="confirm")){
  // echo "form post";
  $pass1 = mysqli_real_escape_string($conn,$_POST["password1"]);
  $pass2 = mysqli_real_escape_string($conn,$_POST["password2"]);
  $email = $_POST["username"];
  $curDate = date("Y-m-d H:i:s");
  if ($pass1!=$pass2){
    $error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
    echo "<div class='error'>".$error."</div><br />";
  }else{
    $pwd = password_hash($pass1, PASSWORD_DEFAULT);
    mysqli_query($conn, "UPDATE `users` SET `password`='".$pwd."', `confirm` = 1, `exp_date` = NULL, hash_id = NULL, `islogin` = 1, logindate = now() WHERE `username`='".$email."';");
    $query2 = mysqli_query($conn, "SELECT id, access_level FROM `users` WHERE `username`='".$email."';");
    $row2 = mysqli_fetch_assoc($query2);
    $_SESSION['uid'] = $row2['id'];
    $_SESSION['uac'] = $row2['access_level'];
    $_SESSION['username'] = $email;
    $_SESSION['last_time']=time();
    unset($_SESSION['admin']);

    $_SESSION['message'] = "Congratulations! Your password has been updated successfully.";
    $_SESSION['msgtype'] = "success";
    header('Location: profile.php?first=1');

    // echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
    // <p><a href="index.php">
    // Click here</a> to Login.</p></div><br />';
  }
}
?>