<?php

function hello()
{
    echo "hello everyone, ";
}
hello();
// echo "good morning ";
hello();
hello();

function sudev()
{
    echo "I'm Sudev Majhi,    ";
}
echo "<br>";

hello() . sudev();
echo "<br>";
sudev() . hello();

echo "<br>";

#function with parameter

function total($x, $y)
{
    echo $x + $y;
}
$one = 34;
$two = 24;
total($one, $two);
echo "<br>";

function sum($a, $b)
{
    echo $a + $b;
}
sum(10, 35);


echo "<br>";

function name($fname, $lname)
{
    echo "hello " . $fname . " " . $lname;
}
name('sudev', 'majhi');
echo "<br>";
#function with returning value
function call($fname, $lname)
{
    $v= $fname.$lname;
    return $v;
}
    echo call (' sudev',' babu');

    echo "<br>";

    function add($math,$eng,$sc){
        $s= $math+$eng+$sc;
        return $s;
    }
    function percentage($st){
        $per=$st/3;
        echo $per;
    }
    $st= add(55,67,72);
    percentage($st);

    echo "<br><br>";
    #function argument by  value
    function wow($a){
        $a='namste ';
    }
    $hp='india';
    wow($hp);
    
    echo $hp;

    #function argument by  reference
    function address(&$x){     // address of $pt, not value 
    $x='Hey, ';
    }
    $pt='sudev';
    address($pt);
    echo $pt;
    



