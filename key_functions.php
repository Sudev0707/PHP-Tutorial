<?php
#key functions-  used in associative array
/*
array_keys()       -return all keys
array_key_first()  -return first key
array_key_last()   -return last key
array_key_exists() -check key
key_exists()


*/

$color= array('red','blue','green','black');

$new= array_key_last($color);
// $new= key_exists($color);
echo "<pre>";
print_r($new);
echo "<pre>";
?>