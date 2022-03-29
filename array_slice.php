<?php
/* if you want to select value/element 
form an array to make new array */

# syntax-  array_slice(array, start, length)

$color= array('red','blue','green','black');
$new= array_slice($color,2,3,true);

echo "<pre>";
print_r($new);
echo "<pre>";

$array1 = array(
    "a" => array('red'),
    "b" => array('black'),
    "c" => array('blue'),
    "d" => array('green')
);
$new1= array_slice($array1,2,3,true);
echo "<pre>";
print_r($new1);
echo "<pre>";
?>