<?php
#store multiple values in a variable

/*
$a= 10;
$a= 10,20,30;  x
$a= "10,20,30";  -> string
$a= array(10,20,30);
*/

#index array
$a= array(10,20,30);
echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[2];
echo $a[1];
echo $a[0];

$cars= array("BMW","Audi","Mercedes","ford","lambo");
echo "<pre>";
print_r($cars);
echo "</pre>";

// $car= ["BMW","Audi","Mercedes","ford","lambo"];
$color[0]= 'red';
$color[1]= 'black';
$color[2]= 'green';
$color[3]= 30;
$color[4]= 'white';
$color[5]= 50;
$color[6]= 'grey';

#array using loop
echo "<ul>";
for ($i=2; $i<=6; $i++){
    echo "<li> $color[$i].</li>";
}
echo "</ul>";

#Associative array
//give index a name

// $a= array["A"=> 10,"B"=> 20,"C"=> 30,"D"=> 40,]
$alpha= array("Any"=> 10,"Bill"=> 20,"Chris"=> 30,"Duke"=> 40,);

echo $alpha["Bill"]= 100;  // assign new value
echo"<pre>";
print_r($alpha);
echo"</pre>";

var_dump($alpha);
var_dump($color);
?>