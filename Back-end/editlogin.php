
<?php 
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';

$query = "select id,user_name,password,main_theme,main_title
from Main
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'
limit 0,1";

$result = $mysqli->query($query);

$row = $result->fetch_assoc();

$id = $row['id'];
$user_name= $row['user_name'];
$password = $row['password'];
$main_theme = $row['main_theme'];
$main_title = $row['main_title'];
?>

<h3>Settings</h3>

<form action="update_login.php" method="post">
<input type="hidden" name="id" value='<?php echo $id;  ?>'>

<label for="user_name">Username: </label>
<input type="text" name="user_name" value='<?php echo $user_name;?>'/>

<label for="password">Password: </label>
<input type="text" name="password" value='<?php echo $password;?>'/>

<label for="main_title">Main Title: </label>
<input type="text" name="main_title" value='<?php echo $main_title;?>'/>

<label for="main_theme">Main Theme: </label>
<select name="main_theme">
    <option selected='<?php echo $main_theme;  ?>'><?php echo $main_theme;  ?></option>
    <option value="style1">Default</option>
    <option value="style2">Chef Recomendation</option>
    <option value="style3">Neon</option>
  </select>

<input type="submit" value="Update settings">

</form>