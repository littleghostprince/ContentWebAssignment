<?php

header("Access-Control-Allow-Origin: *");

include 'dbconfig.php';

$query = "select * from Main";

$result = $mysqli->query($query);

$num_results = $result->num_rows;

$idArray = array();
$usernameArray = array();
$PasswordArray = array();
$main_themearray = array();
$main_titlearray = array();

if(isset($_GET['num'])){
    $num = $_GET['num'];
}
else{
    $num = $num_results;
}

if($num_results > 0){

    while($row = $result->fetch_assoc()){

        extract($row);

        array_push($idArray,$id);
        array_push($usernameArray,$user_name);
        array_push($PasswordArray,$password);
        array_push($main_themearray,$main_theme);
        array_push($main_titlearray,$main_title);

    }
}
else{
    //databse is empty
}

$myjson = '{';
$myjson .='"login":[';

for($i = 0; $i < $num_results; $i++)
{
    $myjson .='{';
        $myjson .= '"id":';
        $myjson .= $idArray[$i].',';

        $myjson .='"user_name":';
        $myjson .='"'.$usernameArray[$i].'",';

        $myjson .='"password":';
        $myjson .='"'.$PasswordArray[$i].'",';

        $myjson .='"main_theme":';
        $myjson .='"'.$main_themearray[$i].'",';

        $myjson .='"main_title":';
        $myjson .='"'.$main_titlearray[$i].'"';
        $myjson .='}';

        if($i != $num_results-1)
        {
            $myjson .=',';
        }
}
        $myjson .=']';
        $myjson .='}';

    echo $myjson;

    //disconnect from database
$result->free();
$mysqli->close();

?>