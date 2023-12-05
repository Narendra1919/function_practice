<?php
$haystack = "The quick brown fox jumps over the lazy dog.";
$pattern = "/quick/";

if (preg_match($pattern, $haystack)) {
    echo "Pattern found!";
} else {
    echo "Pattern not found.";
}

echo "<br>";

$haystack = "Date: 2023-12-05";
$pattern = "/Date: (\d{4}-\d{2}-\d{2})/";

if (preg_match($pattern, $haystack, $matches)) {
    //for fullpatter which includes subpatterns also
    //$matches store data of search result
    echo "Full match: " . $matches[0] ;
    //for subpattern $matches[1]
    echo "Captured date: " . $matches[1] ;

} else {
    echo "Date not found.";
}


?>

