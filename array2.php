<?php
    $animals = array("Cat","Dog","Bird");
    echo $arrlength = count($animals), "<br />";
    for($x = 0; $x < $arrlength; $x++){
        echo $x, ".", $animals[$x]."<br />";
    }
?>