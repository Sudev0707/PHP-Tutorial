<?php


#Data types-
$a= "Sudev Majhi";              #--> String
$b= 97;                         #--> Integer
$c= 30.47;                      #--> float
$d= true;                       #--> Boolean
$e= array('html','css','php');  #--> Array
#$f= new_Myclass();             #--> Object
$g= NULL;                       #--> Null

echo $a," ",$b," ",$c," ",$d," ",$g ;
echo"<pre>";
print_r($e);                    #print array using print_r()
echo"</pre>";


#print the data type and value using var_dump()
echo "-------- data types and values ---------";
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($g);


?>