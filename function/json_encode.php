<?php
$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'New York'
);

$jsonString = json_encode($data);

echo $jsonString;
?>
