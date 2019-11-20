<?php
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';

$query = "update Sub_Pages
set
page_name = '".$mysqli->real_escape_string($_POST['page_name'])."',
content = '".$mysqli->real_escape_string($_POST['content'])."',
photo = '".$mysqli->real_escape_string($_POST['photo'])."'
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