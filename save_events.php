<?php
include_once 'includes/db_func.php';
// foreach($_REQUEST as $key=>$value){
//     if(is_array($value)){
//         foreach($value as $index=>$content){
//             echo "<b>$key [ $index ]</b>: $content<br/>\n";
//         }
//     }else{
//         echo "<b>$key</b>: $value<br/>\n";

//     }
// }

if(isset($_POST['start'])&& $_POST['start']!=''){
    $start = $_POST['start'];
}
if(isset($_POST['end'])&& $_POST['end']!=''){
    $end = $_POST['end'];
}
if(isset($_POST['allday'])&& $_POST['allday']!=''){
    if($_POST['allday']){
        $allday = 1;
    }else{
        $allday = 0;
    };
}
if(isset($_POST['title'])&& $_POST['title']!=''){
    $title = $_POST['title'];
}

if(isset($_GET['delete'])){
    if(isset($_POST['eventId'])&& $_POST['eventId']!=''){
        $eventId = $_POST['eventId'];
    }
    $sql = "DELETE FROM calendar WHERE id = $eventId";
    if($res=mysqli_query($conn, $sql)){
        echo 'deleted';
    }else{
        echo "ERROR: $sql - " . mysqli_error($conn);
    }
}else{
    $sql = "INSERT INTO calendar (`start`, `end`, `title`, `all_day`) VALUE ('$start', '$end', '$title', $allday)";
    if($res=mysqli_query($conn, $sql)){
        echo 'new';
    }else{
        echo "ERROR: $sql - " . mysqli_error($conn);
    }
}

?>