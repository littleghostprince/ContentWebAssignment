<?php>

$host = "localhost";
$username = "WebContent";
$password = "web";
$db_name = "content_data";

session_start();

if( ! empty $_POST){
    if(isset ($_POST['username']) && isset ($_POST['password'])){
        $mysql = new $mysql($host, $username, $password, $db_name);
        $select = $mysql->prepare("SELECT * FROM Main WHERE user_name");
        $select->bind_param('s', $_POST['username']);
        $select->execute();
        $result = $select->get_result();
        $user = $result->fetch_object();
        
        if (password_verify ($_POST['password'], $user->password)) {
            $_SESSION['id'] = user->id;
        }

    }
}

?>