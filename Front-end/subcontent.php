<?php
$p = $_GET['page'];

$id = $_GET['id'];

echo "<h1>$p</h1>";

echo "<div id='idHidden' style='display:none'>$id</div>";

echo "<div id='dropdown'></div>";
echo "<div id='picture'></div>";
echo "<div id='text'></div>";
echo "<script src='subContentScript.js'></script> ";
?>


