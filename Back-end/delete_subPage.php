<?php

include 'dbconfig.php';

$query = "DELETE FROM Sub_Pages WHERE id = ".$mysqli->real_escape_string($_GET['id'])."";

//execute query
if( $mysqli->query($query) ){
    //if successful deletion
    header("Location: index.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();
}else{
    //if there's a database problem
    echo "Database Error: Unable to delete record.";
}
//close database connection
$mysqli->close();

?>