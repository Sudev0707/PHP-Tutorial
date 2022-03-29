<?php
#multidimensional associative array
$marks = array(
    "Krishna"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "Goti"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "Pakiya"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "Ramu"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "Martang"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "goyiya"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "Shyam"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "Sharma"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,),
    "Bhola"=>array("Physics"=>10,"Chemistry"=>30,"Math"=>38,"English"=>10,)
);
echo"<pre>";
print_r($marks);
echo"</pre>";

foreach ($marks as $m1) {
    foreach ($m1 as $m2) {
        echo $m2 . " ";
    }
    echo "<br>";
}


foreach($marks as $key => $mark){
    
    echo $key."=>";
    foreach($mark as $total){
        echo $total. " ";
    }
    echo "<br>";
}

echo "<table border='1px' cellpadding='3px' cellspacing='3px'>";
echo "<tr>
    <th>Name</th>
    <th>PHY</th>
    <th>CHE</th>
    <th>MAT</th>
    <th>ENG</th>
</tr>";
foreach($marks as $key => $mark){
    echo "<tr>";
    echo "<td>$key</td>";
    foreach($mark as $total){
        echo "<td> $total </td>";

    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

$emp = array(
    array(01, "Raju", "Manager", "50000"),
    array(02, "Shyam", "Salesman", "20000"),
    array(03, "Ganpat", "Comp operator", "15000"),
    array(04, "Babu", "Driver", "5000"),
    array(05, "Munna", "Dhotar Chor", "1100"),
    array(06, "Pakiya", "Vasuli", "500")
);
// echo "<table border='1px' cellpadding='3px' cellspacing='3px'>";
// foreach ($emp as list($id,$name,$designation,$salary)){
//     echo "<tr><td>$id</td>
//     <td>$id</td>
//     <td>$id</td>
//     <td>$id</td>
//     <td>$id</td></tr>";
// }
// echo "</table>";

?>