<?php
echo $_POST['page_name'] + '<br>';

include 'dbconfig.php';

$query="insert into Main_Pages
set
user_name_id = '1',
page_name = '".$mysqli->real_escape_string($_POST['page_name'])."',
content = '".$mysqli->real_escape_string($_POST['content'])."',
photo = '".$mysqli->real_escape_string($_POST['photo'])."',
sub_category = '0'";

if($mysqli->query($query)){
    header("Location: index.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to create record.";
}
//close database connection
$mysqli->close();

?>