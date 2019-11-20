<?php
header("Access-Control-Allow-Origin: *");
include 'dbconfig.php';

$host = "localhost";
$username = "WebContent";
$password = "web";
$db_name = "content_data";

//session_start();

// if( ! empty $_POST){
//     if(isset ($_POST['username']) && isset ($_POST['password'])){

//         $query = "select id,user_name,password,main_theme,main_title
//         from Main
//         where id= 1
//         limit 0,1";
        
//         $result = $mysqli->query($query);
        
//         $row = $result->fetch_assoc();
        
//         $user_name= $row['user_name'];
//         $password = $row['password'];


//       //  $mysql = new $mysql($host, $username, $password, $db_name);
//        // $select = $mysql->prepare("SELECT * FROM Main WHERE user_name");
//        // $select->bind_param('s', $_POST['username']);
//         //$select->execute();
//         //$result = $select->get_result();
//         //$user = $result->fetch_object();
        

//         if (password_verify ($_POST['password'], $password)) {
//             $_SESSION['id'] = user->id;
//         }

//     }
// }

if( !empty($_POST)){
    if(isset ($_POST['username']) && isset ($_POST['password'])){
        $mysql = new mysqli($host, $username, $password, $db_name);
        $select = $mysql->prepare("SELECT * FROM Main WHERE user_name");
        $select->bind_param('s', $_POST['username']);
        $select->execute();
        $result = $select->get_result();
        $user = $result->fetch_object();
        
        if (password_verify ($_POST['password'], "password")) {
            $_SESSION['id'] = $user->id;
            header('Location: home.php');
        }
        else{
            echo "password: ".$user;
            echo "needed: ".$_POST['password'];
        }
    }
}

?>