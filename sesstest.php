<?php
session_start();
if(isset($_POST['name']) && isset($_POST['value'])){
    $sessname = $_POST['name'];
    $sessval = $_POST['value'];
    $_SESSION[$sessname] = $sessval;
}
if(isset($_POST['dname'])&&$_POST['dname']!=''){
    $dname = $_POST['dname'];
    unset($_SESSION[$dname]);
}
if(isset($_POST['clear'])&&$_POST['clear']=='on'){
    session_destroy();
    header("location: sesstest.php");
}
echo "Session list<br/>";
foreach ($_SESSION as $key=>$value){
    echo "<b>".$key."</b>".": ".$value."<br/>";
}
// echo "<br/><br/>";
?>
<html>
    <head>
        <title>Session Tester</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="name">Session Name</label>
            <input type="text" name="name" id="name">
            <label for="value">Value</label>
            <input type="text" name="value" id="value">
            <br/>

            <label for="dname">Unset Session</label>
            <input type="text" name="dname" id="dname">
            <br/>
            <label for="destroy">Clear All Session</label>
            <input type="checkbox" name="clear" id="destroy">
            <br>
            <button type="submit">Save</button>
        </form>
    </body>
</html>
<?php
echo "SERVER list<br/><table><thead><td>KEY</td><td>VALUE</td></thead><tbody>";
foreach ($_SERVER as $key=>$value){
    echo "<tr><td><b>".$key." :</b>"."</td><td>".$value."</td></tr>";
}
echo "</tbody>";
?>