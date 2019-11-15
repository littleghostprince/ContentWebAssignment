<?php
header("Access-Control-Allow-Origin: *");

//include database connection
include 'dbconfig.php';

//Get everything from Main
$query = "select * from Main";

//Get everything from MainPage table
$queryMain_Pages = "select * from Main_Pages";

//Get everything from SubPages table
$querySub_Pages = "select * from Sub_Pages";

//Exectue the query 

$result_Main = $mysqli->query($query);
$result_MainPages = $mysqli->query($queryMain_Pages);
$result_SubPages = $mysqli->query($querySub_Pages);

//get number of rows returned 
$main_numResults = $result_Main->num_rows;
$mainPage_numResults = $result_MainPages->num_rows;
$subPage_numResults = $result_SubPages->num_rows;

//variables for user + passwords 
$MainID = array();
$MainUser = array();
$MainPassword = array();
$MainTheme = array();
$MainTitle = array();

//variables for Main Page Data 
$MainPageID = array();
$MainPage_UserID = array();
$MainPage_pageName = array();
$MainPage_Content = array();
$MainPage_Photo = array();
$MainPage_subCategory = array();

//variables for sub Page Data 
$SubPage_ID = array();
$SubPage_MainPageID = array();
$SubPage_pageName = array();
$subPage_Content = array();
$subpage_photo = array();

//put in array for pass_users data 
if($main_numResults > 0){ //if there are accounts 
    while($row = $result_Main->fetch_assoc()){

        extract($row);

        array_push($MainID,$id);
        array_push($MainUser,$user_name);
        array_push($MainPassword,$password);
        array_push($MainTheme,$main_theme);
        array_push($MainTitle,$main_title);
    }
}

if($mainPage_numResults > 0){
    while($row2 = $result_MainPages->fetch_assoc()){
        
        extract($row2);

        array_push($MainPageID,$id);
        array_push($MainPage_UserID,$user_name_id);
        array_push($MainPage_pageName,$page_name);
        array_push($MainPage_Content,$content);
        array_push($MainPage_Photo,$photo);
        array_push($MainPage_subCategory,$sub_category);
    }
}

if($subPage_numResults > 0)
{
    while($row3 = $result_SubPages->fetch_assoc()){
        
        extract($row3);

        array_push($SubPage_ID,$id);
        array_push($SubPage_MainPageID,$main_page_id);
        array_push($SubPage_pageName, $page_name);
        array_push($subPage_Content,$content);
        array_push($subpage_photo,$photo);
    }
}

$tempMainpage_UserID = array();
$tempMainPage_ID = array();
$tempMainPage_PageName = array();
$tempMainPage_Content = array();
$tempMainPage_Photo = array();
$tempMainPage_subCat = array();
$tempMainPage_result = array();

$myjson = '{';
$myjson .= '"Main":[';
    for($i = 0; $i < $main_numResults; $i++){
        $myjson .='{';

        $myjson .='"id":';
        $myjson .=$MainID[$i].',';

        $myjson .='"Username":';
        $myjson .='"'.$MainUser[$i].'",';

        $myjson .='"Password":';
        $myjson .='"'.$MainPassword[$i].'",';

        $myjson .='"Main_Theme":';
        $myjson .='"'.$MainTheme[$i].'",';

        $myjson .='"Main_Title":';
        $myjson .='"'.$MainTitle[$i].'",';

        $myjson .='"MenuItems":{';
        //get MainPages
        $myjson .='"Pages":[';
        for($j = 0 ; $j < $mainPage_numResults; $j)
        {
            //make an array of just the mainpages results 
            if($MainPage_UserID == $MainUser[$i]){
                $temp
            }
        }
            if($MainPage_UserID == $MainUser[$i]){
                $myjson .='{';
                $myjson .='"Page_Name":';
                $myjson .='"'.$MainPage_pageName.'",';
                
                $myjson .='"Content":';
                $myjson .='"'.$MainPage_Content.'",';

                $myjson .='"Photo":';
                $myjson .='"'.$MainPage_Photo.'"';
            }
            $myjson .='}';
        }

        $myjson .='}';

        if($i != $main_numResults-1){
            $myjson .=',';
        }
    }
$myjson .= ']';
$myjson .= '}';

echo $myjson;

//disconnect from database
$result_Main->free();
$result_MainPages->free();
$result_SubPages->free();

$mysqli->close();
?>