<?php
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ERROR);
include_once 'includes/db_func.php';
  // ================= debug form POST ====================
  // Uncomment below lines within this debug code until exit() row.
  // This will return any $_POST and $_FILES contents submitted to this script
  //
  foreach($_POST as $key => $value) {
    if(is_array($value)) {
        $response['POST'][$key] = array();
        foreach($value as $index => $content) {
            $response['POST'][$key][$index] = $content;
        }
    } else {
        $response['POST'][$key] = $value;
    }
  }
  foreach($_FILES as $key => $value) {
      $response['FILES'][$key] = array();
      foreach($value as $param => $content) {
          $response['FILES'][$key][$param] = $content;
      }
  }

  $output = json_encode($response);
  // die($output);
  // 
  // ================= End debug form POST ====================
$upload_path = __DIR__. DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'img'  . DIRECTORY_SEPARATOR . 'uploads' ;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Form-1 (Personal Details)
  $user_id        = $_POST['user-id'];
  $user_fullname  = $_POST['user-fullname'];
  $user_designation  = $_POST['user-designation'];
  $user_mobile    = $_POST['user-mobile'];
  $user_avatar    = $_POST['user-avatar'];
  $avatar_check   = $upload_path . DIRECTORY_SEPARATOR . $user_avatar;


  $data = array();
  $results = array();
  $ds = DIRECTORY_SEPARATOR;

  // Check for file upload and process
  if (isset($_FILES['croppedImage']) && ($_FILES['croppedImage']['name'] != '')) {
    if (file_exists($avatar_check)) {
        unlink($avatar_check); // Delete the file from the server
    }
    // echo('file available');
    // die(json_encode(array('type' => 'error', 'text' => 'File available')));

    $file_size =$_FILES['croppedImage']['size'];
    if($file_size > 10750000){
      $return = array(
        'type' => 'error',
        'text' => 'File size must not be 10 MB'
      );
      $output = json_encode($return);
      die($output);
    }

    $Filename = basename($_FILES['croppedImage']['name']);
    if (!empty($Filename)) { // Check if the uploaded file has filenames or just plain blob
      $Filename = time() . '_' . basename($_FILES['croppedImage']['name']); // Set stored filename to be unique by combining timestamp and original file name
        $path = $upload_path . $ds . $Filename;
        
        // // If the file exists, delete the existing file
        // if (file_exists($path)) {
        //     unlink($path);
        // }

        if (move_uploaded_file($_FILES['croppedImage']['tmp_name'], $path)) {
            $return = array(
                'type' => 'success',
                'text' => $_FILES['croppedImage']['name'] . ' has been uploaded'
            );
            $output = json_encode($return);
            // die($output);
        } else {
            $return = array(
                'type' => 'error',
                'text' => 'File upload failed'
            );
            $output = json_encode($return);
            // die($output);
        }
    }

  } else {
      // if (isset($_POST['upload'])){
          if (isset($_POST['delimg'])) {
              if (file_exists($user_avatar)) {
                  unlink($user_avatar); // Delete the file from the server
              }
              $Filename = '';
          } else {
              $Filename = $user_avatar;
          }
      // }
  }

  // echo "form-1 submitted\n";
  // $qry = "INSERT INTO user_details( user_id, fullname, email, nickname, year_in, year_spm, dob, avatar) ";
  // $qry .= "VALUES( '$user_id', '$user_fullname', '$user_email', '$user_nickname', '$user_yr_start', '$user_yr_end', '$user_dob', '$Filename') ";
  // $qry .= "AS new ON DUPLICATE KEY UPDATE ";
  // $qry .= "fullname = new.fullname, email = new.email, nickname = new.nickname, year_in = new.year_in, year_spm = new.year_spm, dob = new.dob, avatar = new.avatar";
  if(isset($_POST['edit'])){
    $pwd = password_hash($_POST['edit'], PASSWORD_DEFAULT);
    $qry = "UPDATE users SET password = '$pwd'";
  }else{
    $qry = "UPDATE users SET fullname = UPPER('$user_fullname'), designation = UPPER('$user_designation'), mobile = '$user_mobile'";
    if(isset($_POST['user-avatar'])&& !isset($_FILES['croppedImage'])){
      // $Filename = $_POST['user-avatar'];
      $qry .= ", avatar = '$Filename'";
    }
  }
  $qry .= " WHERE id = $user_id";
  // echo $qry;

  if(mysqli_query($conn, $qry)){
    $data = array(
            'user_fullname' => $user_fullname,
            'user_designation' => $user_designation,
            'user_avatar' => $Filename,
            'user_mobile' => $user_mobile
    );
  }else{
    $mysqlerror = mysqli_error($conn);
    $output = json_encode(
            array(
                'type' => 'error',
                'text' => 'Query error',
                'data' => array(
                  'query' => $qry,
                  'mysqli' => $mysqlerror
                )
    ));
    die($output);
    // die("query error: $qry \n $conn");
  }
  $results = array(
    'type' => 'success',
    'text' => 'Data have been updated',
    'data' => $data
  );
  if(isset($_POST['edit'])){
    $results['data']['password'] = 'updated';
    $results['text'] = 'Password have been updated';
  }else{
    $results['text'] = 'Profile have been updated';
  }
  $output = json_encode( $results);
  die($output);
}

?>