<?php

class MyClass {
    public function __construct() {
        echo 'MyClass has been instantiated.';
    }
}


if (class_exists('MyClass')) {
   
    $obj = new MyClass();
} else {
   
    echo 'MyClass does not exist.';
}
?>
