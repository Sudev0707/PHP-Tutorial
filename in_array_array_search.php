<?php
/*if you want to search anuything in array
1) in_array() gives true/false
2) array_search() returns index/key
*/

$food= array('apple','orange','mango','banana','grapes');
echo in_array('apple',$food);

if(in_array('mango',$food,true)){
    echo "available";
}else{
    echo "not available";
}
echo"<br>";
#with associative

$a= array(
    array('p','h'),
    array('s','t'),'o'
);
if (in_array(array('p','h'),$a,true)){
    echo "find success";
}else{
    echo "not found";
}
?>