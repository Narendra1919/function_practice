<?php
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
    echo "<br>";
}
?>

<?php
$search_array = array('first' => null, 'second' => 4);

// returns false



if (isset($search_array['first'])) {
    echo "The 'first' element is in the array";
}
else{
    echo "dose not exists";
    echo "<br>";
}
// returns true
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
    echo "<br>";
}
else{
    echo "dose not exists";
}



?>