<?php 
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';

$query = "select id,user_name_id,page_name,content,photo,sub_category
from Main_Pages
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'
limit 0,1";

$result = $mysqli->query($query);

$row = $result->fetch_assoc();

$id = $row['id'];
?>

<h3>Page Details</h3>

<form action="add_SubPages.php" method="post">
<input type="hidden" name="id" value='<?php echo $id;  ?>'> <!--This is the main_page_id -->

<label for="page_name">Page Title: </label>
<input type="text" name="page_name"/>
</br>

<label for="content">Text: </label>
<input type="text" name="content"/>
</br>

<label for="photo">Photo: </label>
<input type="text" name="phot"/>
</br>

<input type="submit" value="Add Page">

</form>