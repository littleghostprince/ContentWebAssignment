<?php
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';
?>
<h3>Main Pages</h3>

<table>
<tr>
<th>id</th>
<th>user_name_id</th>
<th>page_name</th>
<th>content</th>
<th>photo</th>
<th>sub_category</th>
</tr>

<?php

$query = "select * from Main_Pages";
$result = $mysqli->query($query);

$num_results = $result->num_rows;

if($num_results > 0){
    while($row=$result->fetch_assoc()){
        extract($row);
        
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$user_name_id}</td>";
        echo "<td>{$page_name}</td>";
        echo "<td>{$content}</td>";
        echo "<td>{$photo}</td>";
        echo "<td>{$sub_category}</td>";
        echo "<td><a href='editMainPages.php?id={$id}'>Edit</a></td>";
        echo "<td><a href='delete_mainPage.php?id={$id}'>Delete</a></td>";
        echo "</tr>";
    }
}
else{
    
}
$result->free();
$mysqli->close();
?>

</table>

</table>
  <p>
    <div>
      <a href="create_mainPage.php">Add New Page</a>
    </div>
  </p>