<?php

$emp = array(
    array(01, "Raju", "Manager", "50000"),
    array(02, "Shyam", "Salesman", "20000"),
    array(03, "Ganpat", "Comp operator", "15000"),
    array(04, "Babu", "Driver", "5000"),
    array(05, "Munna", "Dhotar Chor", "1100"),
    array(06, "Pakiya", "Vasuli", "500")
);
echo $emp[1][3] . " ";
echo $emp[0][2] . " ";
echo $emp[4][3] . " ";

echo "<pre>";
print_r($emp);
echo "</pre>";

#using loop
for ($row = 0; $row <= 5; $row++) {
    for ($col = 0; $col <= 3; $col++) {
        echo $emp[$row][$col] . ", ";
    }
    echo "<br>";
}
echo "<br>";
#using foreach (without counting)
foreach ($emp as $v1) {
    foreach ($v1 as $v2) {
        echo $v2 . " ";
    }
    echo "<br>";
}


echo "<table border='1px' cellpadding='3px' cellspacing='3px'>";
echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Salary</th>
</tr>";
foreach ($emp as $v1) {       //outer loop
    echo "<tr>";
    foreach ($v1 as $v2) {    //inner loop
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
