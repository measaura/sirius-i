<?php
// =================================================================================================
//  Debugging Purpose:
//  Uncomment the lines below to analyse $_POST submission
// =================================================================================================
// echo "<h2>Debug GET/POST</h2><br/>\n";
// foreach($_GET as $key=>$value){
//     if(is_array($value)){
//         echo "ARRAY found<br/>\n";
//         foreach($value as $index=>$content){
//             echo "<b>$key [ $index ]</b>: $content<br/>\n";
//         }
//     }else{
//         echo "<b>$key</b>: $value<br/>\n";

//     }
// }
// exit();
// =================================================================================================

header("Content-Type: application/json; charset=UTF-8");
// ini_set('display_errors', 1);
require_once '../includes/db_func.php';
// foreach($_SESSION as $key=>$value){
//     if(is_array($value)){
//         echo "ARRAY found<br/>\n";
//         foreach($value as $index=>$content){
//             echo "<b>$key [ $index ]</b>: $content<br/>\n";
//         }
//     }else{
//         echo "<b>$key</b>: $value<br/>\n";

//     }
// }
if(isset($_SESSION['username']) && $_SESSION['username'] != '' && $_SESSION['uac']>0){
    $json = array();
    $i=0;
    // $sql="SELECT * FROM calendar";
    $sql="SELECT id, group_id AS groupId, all_day AS allDay, IF(`all_day`=1,REPLACE(`start`,' 00:00:00',''),`start`) AS `start`, IF(`all_day`=1,REPLACE(`end`,' 00:00:00',''),`end`) AS `end`, IF(`all_day`=0,TIME(`start`),'') AS `startTime`, IF(`all_day`=0,TIME(`end`),'') AS `endTime`, IF(`all_day`=0,DATE(`start`),'') AS `startRecur`, IF(`all_day`=0,DATE(DATE_ADD(`end`, INTERVAL 1 DAY)),'') AS `endRecur`, title, url, class_name AS classNames, edditable AS startEditable, duration_editable AS durationEditable, resource_editable AS resourceEditable, display, overlap, `constraint`, bgcolor AS color, txtcolor AS textColor, `source` FROM calendar";
    if(isset($_GET['start']) && isset($_GET['end'])){
        $start = str_replace('T',' ', $_GET['start']);
        $start = str_replace('+08:00','', $start);
        $end = str_replace('T',' ', $_GET['end']);
        $end = str_replace('+08:00','', $end);
        $sql .= " WHERE `start` BETWEEN '$start' AND '$end'";
    }
    // echo $sql."\n";
    if($res=mysqli_query($conn,$sql)){
        // echo "SUCCESS\n";
        $tempArr = array();
        while($row=mysqli_fetch_assoc($res)){
            $tempArr = $row;
            // print_r($row);
            // echo $row['start']."\n";


            // $tempArr = $row;
            array_push($json, $tempArr);
            // if(is_null(implode('',$json[$i]))){
            //     unset($json[$i]);
            // }
            // $i++;
        }

    }else{
        echo "ERROR: $sql - ". mysqli_error($onn);
    }
    // $json[] = $agenda;
    foreach($json as $key=>$value){
        foreach($value as $item=>$val){
            // echo "$item : $val\n";
            if(empty($val) ){
                // echo "unset\n";
            unset($json[$key][$item]);
            }
        }
    }
    // print_r($json);
    // print_r(array_filter($json, function($value) { return !is_null($value) && $value !== ''; }));
    // print_r(array_filter($json, function($value) { return array_filter($value) != array(); }));

    // $events = array();
    // $agenda['title']= 'All Day Event';
    // $agenda['start']= '2021-12-01';
    // $events[] = $agenda;

    // $agenda['title']= 'Long Event';
    // $agenda['start']= '2021-12-07';
    // $agenda['end']= '2021-12-10';
    // $events[] = $agenda;

    // $agenda['groupId']= 999;
    // $agenda['title']= 'Repeating Event';
    // $agenda['start']= '2021-12-09T16:00:00';
    // $events[] = $agenda;

    // $agenda['groupId']= 999;
    // $agenda['title']= 'Repeating Event';
    // $agenda['start']= '2021-12-16T16:00:00';
    // $events[] = $agenda;

    // $agenda['title']= 'Conference';
    // $agenda['start']= '2021-12-11';
    // $agenda['end']= '2021-12-13';
    // $events[] = $agenda;

    // $agenda['title']= 'Meeting';
    // $agenda['start']= '2021-12-12T10:30:00';
    // $agenda['end']= '2021-12-12T12:30:00';
    // $events[] = $agenda;

    // $agenda['title']= 'Lunch';
    // $agenda['start']= '2021-12-12T12:00:00';
    // $events[] = $agenda;

    // $agenda['title']= 'Meeting';
    // $agenda['start']= '2021-12-12T14:30:00';
    // $events[] = $agenda;

    // $agenda['title']= 'Happy Hour';
    // $agenda['start']= '2021-12-12T17:30:00';
    // $events[] = $agenda;

    // $agenda['title']= 'Dinner';
    // $agenda['start']= '2021-12-12T20:00:00';
    // $events[] = $agenda;

    // $agenda['title']= 'Birthday Party';
    // $agenda['start']= '2021-12-13T07:00:00';
    // $events[] = $agenda;

    // $agenda['title']= 'Click for Google';
    // $agenda['url']= 'http://google.com/';
    // $agenda['start']= '2021-12-28';
    // $events[] = $agenda;

    //   echo json_encode($val);

    //   $myObj->title = "John";
    // $myObj->start = '2021-12-13T07:00:00';

    // $myJSON = json_encode($myObj);

    // echo $myJSON;

    // $agenda['allDay'] = true;
    // $agenda['start'] = '2021-12-25 12:00:00';
    // $agenda['end'] = '2021-12-30 12:00:00';
    // $agenda['title'] = "Hello World";
    // $agenda['id']= "1";
    // $events[] = $agenda;

    // $agenda['allDay'] = false;
    // $agenda['start'] = '2021-12-27 12:00:00';
    // $agenda['end'] = '2021-12-27 16:30:00';
    // $agenda['title'] = "Blah";
    // $agenda['id']= "2";
    // $events[] = $agenda;


    // echo json_encode($events);
    echo json_encode($json);
}
?>