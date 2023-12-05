<?php $haystack = "Hello, world!";
$needle = "world";

$position = strpos($haystack, $needle);

if ($position !== false) {
    echo "The substring '$needle' was found at position $position.";
} else {
    echo "The substring '$needle' was not found in the string.";
}
 ?>