<?php
#find common in two or more
/*
array_intersect()       : match value
array_intersect_key()   : match key
array_intersect_assoc() :match both values & keys
array_intersect_uassoc()
array_intersect_ukey()
array_uniintersect()
array_uniintersect_assoc()
array_uniintersect_uassoc()
*/

$a= array("1st"=>10,"2nd"=>20,"3rd"=>38,"4th"=>10,"5th"=>39,"6th"=>28,"7th"=>470);
$b= array("1st"=>10,"a"=>30,"b"=>37,"4th"=>10,"c"=>39,"6th"=>28,"d"=>470);

$new= array_intersect_uassoc($a, $b);
echo "<pre>";
print_r($new);
echo "<pre>";
?>