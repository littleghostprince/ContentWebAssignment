<?php

$host = "localhost";
$username = "WebContent";
$password = "web";
$db_name = "content_data";

//connect to mysql server
$mysqli = new mysqli($host, $username, $password, $db_name);

if(mysqli_connect_errno()) {
    echo "Error: Could not connect to database.";
    exit;
    }


?>