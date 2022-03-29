<?php

#If statement
$a= 40;
if($a>20){
    echo "a is greator ie. $a  .<br>";
}

$b= 90;
$c=120;
if($b<$c){
    echo "b is smaller .<br>";
}

if($b==$c):
    echo"b is smaller";
endif;

#If else statement
$x = 'Sunday';
$y= 'Sunday';
if ($x == $y) {
    echo "baarish ni hogi";
} else {
    echo "baarish hogi";
}

echo"<br>";

$name= 'Sudev Babu';
$gender= 'Male';
if($gender=='Male'){
    echo "Hello Sir";
}else{
    echo "Hello Miss";
}

echo "<br>";
$m= 90;
$n= 120;
if($m>$n){
    echo "m is greater ie. $m";
}else{
    echo "n is greator ie. $n";
}
echo"<br>";
#if elseif
/*
percentage              Grade
80-100%                 merit
60-79%                  1st division
45-59%                  2nd division
33-44%                  3rd division
less than 33%           fail 
*/

#ternary operator
$s=5;
($s>10)?$z="true":$z="false";
echo $z;
// $ab=5;
// ($ab>10)?echo"true":echo"false";




