<?php
$r="body text= %body%";
$bodytag = str_replace("%body%", "black",$r);
echo $bodytag;

echo "<br>";


$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

echo $newphrase = str_replace($healthy, $yummy, $phrase);
?>
