



<?php
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
echo "<br>";
?>

<?php
$str = "    Hello World!    ";
echo "Without trim: " . $str;
echo "<br>";
echo "With trim: " . trim($str);
echo "<br>";
?>

<?php
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
echo "<br>";
?>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
echo "<br>";
?>

<?php
$str5 = "     Hello World!"; 
echo $str5 . "<br>"; 
echo ltrim($str5);   
echo "<br>";        
?>





