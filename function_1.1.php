<?php
#local variable
function test(){
    $a=10;
}
test();
// echo $a;


#global
$b=10;
function test1($b){
echo $b;
    
}
test();


?>