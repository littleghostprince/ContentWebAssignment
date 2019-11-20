
<?php 

include 'dbconfig.php';

$query = "select id,user_name_id,page_name,content,photo,sub_category
from Main_Pages
where id='".$mysqli->mysql_real_escape_string($_REQUEST['id'])."'
limit 0,1";

$result = $mysqli->query($query);

$row = $result->fetch_assoc();

$page_name= $row['page_name'];
$content = $row['content'];
$photo = $row['photo'];
?>

<h3>Update Details</h3>

<form action="update_mainPage.php" method="post">

<label for="page_name">Page Title: </label>
<input type="text" name="page_name" value='<?php echo $page_name;?>'/>

<label for="content">Content: </label>
<input type="text" name="content" value='<?php echo $content;?>'/>

<label for="photo">Photo Link: </label>
<input type="text" name="photo" value='<?php echo $photo;?>'/>

<input type="submit" value="Update Page">

</form>