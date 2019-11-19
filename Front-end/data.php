<?php echo  

//get data from database

$host = "localhost";
$username = "WebContent";
$password = "web";
$db_name = "content_data";

//connect to mysql server
$conn = mysqli_connect($host, $username, $password, $db_name);

//get data from Main table 
$result = mysqli_query($conn,"SELECT * FROM Main");

//store the array
$data = array();
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

//return respose in JSON format

echo json_encode($data);
?>