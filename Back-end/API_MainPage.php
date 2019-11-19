<?php

header("Access-Control-Allow-Origin: *");

include 'dbconfig.php';

$query = "select * from Main_Pages";

$result = $mysqli->query($query);

$num_results = $result->num_rows;

$idArray = array();
$usernameID_Array = array();
$page_name_Array = array();
$content_array = array();
$photo_array = array();
$subCategory_array = array();

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
        array_push($usernameID_Array,$user_name_id);
        array_push($page_name_Array,$page_name);
        array_push($content_array,$content);
        array_push($photo_array,$photo);
        array_push($subCategory_array,$sub_category);

    }
}
else{
    //databse is empty
}

$myjson = '{';
$myjson .='"MainPages":[';

for($i = 0; $i < $num_results; $i++)
{
    $myjson .='{';
        $myjson .= '"id":';
        $myjson .= $idArray[$i].',';

        $myjson .='"user_name_id":';
        $myjson .='"'.$user_name_id[$i].'",';

        $myjson .='"page_name":';
        $myjson .='"'.$page_name_Array[$i].'",';

        $myjson .='"content":';
        $myjson .='"'.$content_array[$i].'",';

        $myjson .='"photo":';
        $myjson .='"'.$photo_array[$i].'",';

        $myjson .='"sub_category":';
        $myjson .='"'.$subCategory_array[$i].'"';
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