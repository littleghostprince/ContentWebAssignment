<?php
    $links = [
        "Home" => "index.php",
        "About" => "about.php",
        "Contact" => "contact.php"
    ];

    echo "<div class=menu>";
    foreach($links as $key => $value) {
        echo "<strong><a href=$value>$key</a></strong>";
    }
    echo "</div>";
?>