<?php

/*
array_diff()
array_diff_key()
array_diff_assoc()
array_diff_uassoc()
array_diff_ukey()
array_diff_assoc()
array_udiff_uassoc()
array_udiff()
*/

#always print different values from first array
$a1= array("1st"=>"raju","2nd"=>"mohan","3rd"=>"babu","4th"=>"pakiya","5th"=>"montu");
$a2= array("1st"=>"raju","b"=>"shyam","c"=>"babu","d"=>"goti","5th"=>"montu");

$new= array_udiff($a1,$a2);

echo "<pre>";
print_r($new);
echo "<pre>";
?>