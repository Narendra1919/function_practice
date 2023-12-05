<?php
$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
foreach ($values as $value) {
    
    
    var_export($value);
    
    echo var_dump(is_string($value));
    echo "<br>";
}
?>