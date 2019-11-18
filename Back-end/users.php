<?php
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';
?>
<h3>Users</h3>

<table>
<tr>
<th>id</th>
<th>username</th>
<th>password</th>
<th>Main_Theme</th>
<th>Main_Title</th>
</tr>

<?php

$query = "select * from Main";
$result = $mysqli->query($query);

$num_results = $result->num_rows;

if($num_results > 0){
    while($row=$result->fetch_assoc()){
        extract($row);
        
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$user_name}</td>";
        echo "<td>{$password}</td>";
        echo "<td>{$main_theme}</td>";
        echo "<td>{$main_title}</td>";
        echo "</tr>";
    }
}
else{
    
}
$result->free();
$mysqli->close();
?>

</table>
