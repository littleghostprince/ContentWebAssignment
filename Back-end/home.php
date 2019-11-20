
<?php //login.php here. If the user is not loged in do not continue

session_start();

if(isset($_SESSION['id'])){
    //
}
else{
    header('Location: /index.php');
}
?>

<h3>Welcome Back <?php echo $_POST["username"]?></h3>
<nav>
<a href="Mainpages/mainPages.php">Edit Pages </a>
<a href="">Edit SubPages </a>
<a href="">Settings </a>
<a href="/logout.php">Logout </a>

</nav>
