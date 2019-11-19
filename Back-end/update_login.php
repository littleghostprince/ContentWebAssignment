<?php
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';

$query = "update Main
set
user_name = '".$mysqli->real_escape_string($_POST['user_name'])."',
password = '".$mysqli->real_escape_string($_POST['password'])."',
main_title = '".$mysqli->real_escape_string($_POST['main_title'])."',
main_theme = '".$mysqli->real_escape_string($_POST['main_theme'])."'
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'";

if($mysqli->query($query)){
    header("Location: index.php"); /*redirect */
    exit();
}
else{
    echo "Database Error: Unable to update record.";
}

//close database connection
$mysqli->close();

?>