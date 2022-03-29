<?php
$emp = array(
    array(01, "Raju", "Manager", "50000"),
    array(02, "Shyam", "Salesman", "20000"),
    array(03, "Ganpat", "Comp operator", "15000"),
    array(04, "Babu", "Driver", "5000"),
    array(05, "Munna", "Dhotar Chor", "1100"),
    array(06, "Pakiya", "Vasuli", "500")
);
echo count($emp)."<br>";
echo sizeof($emp);

echo "<br>";
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
echo count($marks)."<br>";
echo sizeof($marks);
?>