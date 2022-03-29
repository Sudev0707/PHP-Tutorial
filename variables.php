<?php 

$a= "Sudev Babu";
echo $a;

echo "<br>";

$num= 25.87 ;
echo $num;

$firstname= "Sudev";
$lastname = "Majhi";
echo "<br>";
echo $firstname . $lastname ."<br>"; //concatenation

#write way
/*
$_first_name= "sudev";
$_last_name="majhi";
$f-name= ;
$firstName= ;
$firstname07= ;
*/

#php is case sensitive

$age= 24;
echo "age is : ".$age . "<br>";
$AGE= 23;
echo "AGE is : ".$AGE;

$name= "Sudev Majhi";
echo "<h2>". $name."</h2>" ;
echo "hello, ". $name ."<br><br>";

echo "<h3>----Constant Variables------</h3>";
$x= 34;
$x= 76;
echo $x ."<br>";

#syntax: define(variable_name, value, case-sensitive)
define("num",500,TRUE);
echo num;
#echo NUM;
echo "<br>";
#can't use $ sign with constant variable, constant are global variable


define("test",70,true);   #true ends case sensitivity
echo test.  "<br>";
#echo TEST.  "<br>";

/*define("test",89);       # can't change test variable value
echo test;*/

$sum= test+30;
echo $sum;
?>