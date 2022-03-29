<?php
/*array_replace() for index/associative array
array_replace_recursive() for multidimensional associative array
    */

//$a= array['sanju','manju','ganju','babu'];
$a = array('sanju', 'manju', 'ganju', 'babu');
$b = array('ajay', 'rahul', 'aman',);
//$c= array('c1'=>'mehul','c2'=>'pranab','c3'=>'akshay');

$newarray = array_replace($a, $b); 
echo "<pre>";
print_r($newarray);
echo "</pre>";
echo "<br>";

$array1 = array(
    "a" => array('red'),
    "b" => array('black'),
    "c" => array('blue'),
    "d" => array('green')
);
$array2 = array(
    "a" => array('yellow'),
    "b" => array('grey'),
    "c" => array('pink'),
    "d" => array('white')
);
$new= array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($new);
echo "</pre>";
?>
