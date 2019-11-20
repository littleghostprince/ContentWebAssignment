<?php
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';
?>
<link rel="stylesheet" type="text/css" href="Front-end/css/mainStyle.css">
<h3>Sub Pages</h3>

<table>
<tr>
<th>id</th>
<th>main_page_id</th>
<th>page_name</th>
<th>content</th>
<th>photo</th>
</tr>

<?php

$query = "select * from Sub_Pages";
$result = $mysqli->query($query);

$num_results = $result->num_rows;

if($num_results > 0){
    while($row=$result->fetch_assoc()){
        extract($row);
        
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$main_page_id}</td>";
        echo "<td>{$page_name}</td>";
        echo "<td>{$content}</td>";
        echo "<td>{$photo}</td>";
        echo "<td><a href='editSubPages.php?id={$id}'>Edit</a></td>";
        echo "<td><a href='delete_subPage.php?id={$id}'>Delete</a></td>";
        echo "</tr>";
    }
}
else{
    
}
$result->free();
$mysqli->close();
?>

</table>
