<?php
require_once 'includes/db_func.php';
require_once 'func/email_func.php';

if($_SERVER['SERVER_NAME'] == 'sirius-i.test'){
   $sirius_tld = 'http://sirius-i.test';
}else{
   $sirius_tld = 'https://sirius-i.svpetroleum.com.my';
}
// ini_set('display_errors', 1);
// exit();
// ================= Ni untuk debug form POST ====================
// 
// foreach($_POST as $key=>$value){
// 	echo $key.": ".$value."<br/>";
// }
// exit();
// echo "Files<br/>";
// print_r($_FILES);
// 
// ================= Ni untuk debug form POST ====================

$username = $_POST['email'];
$username = filter_var($username, FILTER_SANITIZE_EMAIL);
$username = filter_var($username, FILTER_VALIDATE_EMAIL);
$email = $username;
// $fullname = $_POST['fullname'];
// $password = $_POST['password'];
// $company = $_POST['company'];
// $designation = $_POST['designation'];
// $contact = $_POST['contact'];
if(isset($_POST['urlqry']) && $_POST['urlqry'] !=''){
  $urlqry="?".$_POST['urlqry'];
}else{
  $urlqry="";
}
// $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

// echo $hashed_pass."<br>";
$sql1="SELECT * from users where username = '$username'";
// echo $sql1;
if($res1=mysqli_query($conn,$sql1)){
  if(mysqli_num_rows($res1)>0){
    // session_start();
    $message = "This email have been registered!<br/>Please login to SIRIUS-I with your registered email.";
    $status = "error";
    echo "email been registered earlier";
    // header("Location: index.php");
  }else{
    $expFormat = mktime(
    date("H")+8, date("i"), date("s"), date("m") ,date("d")+7, date("Y")
    );
    $expDate = date("Y-m-d H:i:s",$expFormat);
    $key = md5(2418*2+(int)$email);
    $addKey = substr(md5(uniqid(rand(),1)),3,10);
    $key = $key . $addKey;
    // if(isset($_POST['emp_id'])){
    //   $emp_id = strtoupper($_POST['emp_id']);
    //   $sql = "INSERT INTO login (username,password) VALUE (lower('$username'),'$hashed_pass',upper('$fullname'), upper('$company'), '$designation', '$contact', '$emp_id')";
    // }else{
      $sql = "INSERT INTO users (username, hash_id, exp_date) VALUE (lower('$username'), '$key' ,'$expDate' )";
    // }
    // echo $sql;
    // exit();
    if (mysqli_query($conn, $sql))  {
        // echo "New user created successfully";
        // header("Location: index.php$urlqry");
        // header("Location: confirmmail.php");

        $output='<p>You have been invited as the SIRIUS-I manager. Please click the button below to confirm your email address.</p>';
        // $output.='<p>-------------------------------------------------------------</p>';
        // $output.='<p><a href="'.$sirius_tld.'/confirmmail.php?key='.$key.'&email='.$email.'&action=confirm" target="_blank">
        // '.$sirius_tld.'/confirmmail.php?key='.$key.'&email='.$email.'&action=confirm</a></p>';		
        // $output.='<p>-------------------------------------------------------------</p>';
        // $output.='<p>Please be sure to copy the entire link into your browser.';
        $output.='<p>The link will expire after 7 days for security reason.</p>';
        // $output.='<p>If you did not register to SIRIUS-I, no action is needed.</p>'; 
        $body = $output; 
        $subject = "Registration Invite - SIRIUS-I";
        $title = "SIRIUS-I Registration";
        $buttontxt = "Accept Invite";
        $buttonlink = $sirius_tld.'/confirmmail.php?key='.$key.'&email='.$email.'&action=confirm';

        sendEmail($email,$subject,$title,$body,$buttontxt,$buttonlink,$email);
        // session_start();
        $message = "The mail invite link has been sent to the  email address.";
        $status = "success";
        // $_SESSION['message'] = 'Your email confirmation link has been sent to your registered email address';
        // echo ('The mail invite link has been sent to the  email address');


        // $url = '' . $sirius_tld .'/checkmail.php';
        // $url = $sirius_tld .'/checkmail.php';
        // $curl = curl_init($url);
        // curl_setopt($curl, CURLOPT_POST, true);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // $data = "email=". $_POST['email'];
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        // $result = curl_exec($curl);
        // // echo $result;
        // curl_close($curl);

        // header("Location: index.php");

      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  }
}else {
  echo "Error: $sql1 " .  mysqli_error($conn);
}
$response = [
  'message' => $message,
  'status' => $status
];

echo json_encode($response);
  
//   mysqli_close($conn);
?>