<?php

$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array));

?>

<?php
    $a1 = array("1","2","3");
    $a2 = array("a");
    $a3 = array();
    
    echo "a1 is: '".implode("','",$a1)."'<br>";
    echo "a2 is: '".implode("','",$a2)."'<br>";
    echo "a3 is: '".implode("','",$a3)."'<br>";
?>

