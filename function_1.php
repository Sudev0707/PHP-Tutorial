<?php

function test($string)
{
    $string .= "something";
}
$str = "this is a string";
test($str);
echo $str;

echo "<br>";

function first(&$num)
{
    $num += 5;
}
function second($num)
{
    $num += 7;
}
$number = 10;
first($number);
echo "original no. is $number ,";
second($number);
echo "original no. is $number";


echo "<br><br>";
#variable function
function wow($name)
{
    echo "hello, $name";
}
$var = "wow";
$var("sudev majhi");

echo "<br>";
#asynchronus function
$test = function ($name) {
    echo "hello, $name";
};
$test("Sudev");

echo "<br><br>";

#recursive function
function display($number)
{
    if ($number <= 5) {
        echo "$number  - hello <br>";
        display($number + 1);
    }
}
display(0);
echo "<br><br>";

#factorial program
function facto($n){
    if($n == 0){
        return 1;
    }else{
        return($n*facto($n-1));
    }
}
echo facto(5);
