<?php
#syntax-  array_slice(array,start, length, array-1)

$color= array('red','blue','green','black');
array_splice($color,0,2);

echo "<pre>";
print_r($color);
echo "<pre>";

array_splice($color,2, count($color));
echo "<pre>";
print_r($color);
echo "<pre>";
?>


#not understanding