
<?php //login.php here. If the user is not loged in do not continue

//session_start();

//if(isset($_SESSION['id'])){
    //
//}
//else{
//    header('Location: /ContentWebAssignment/Back-end/index.php');
//}
?>

<link rel="stylesheet" type="text/css" href="../css/mainStyle.css"/>

<div class=header>
<h3>Welcome Back <?php echo $_POST["username"]?></h3>
</div>
<div class=navBar>
<nav>
    <a href="mainPages.php">Edit Pages </a><br/>
    <a href="subpages.php">Edit SubPages </a><br/>
    <a href="">Settings </a><br/>
    <a href="logout.php">Log Out </a>
</nav>
</div>


