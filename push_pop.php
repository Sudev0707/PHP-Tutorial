<?php
#push()- add values in last , at least two parameter
#pop()- delete last value

$color= array('red','blue','green','black');

echo array_pop($color);

echo "<pre>";
print_r($color);
echo "</pre>";

echo array_push($color, 'apple', 'mango');

echo "<pre>";
print_r($color);
echo "</pre>";
?>