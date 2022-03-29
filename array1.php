<?php
#foreach loop using array

$array= array(10,30,38,10,39,28,47);
foreach($array as $values){
    echo $values.", ";
}
echo"<pre>";
print_r($array);
echo"</pre>";

$array1= array("1st"=>10,"2nd"=>30,"3rd"=>38,"4th"=>10,"5th"=>39,"6th"=>28,"7th"=>470);
foreach($array as $key=>$value){
    echo $key."=>".$value.", ";
}
echo"<pre>";
print_r($array1);
echo"</pre>";
?>