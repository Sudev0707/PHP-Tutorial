<?php
/*loop is divided in three parts
initialization (from where you want to start)
condition 
increment/decrement
*/
# while loop, do while, for loop, forEach

#while
echo "-------while-------<br>";
$a = 1;    #initialization
while ($a <= 7) {      #condition
    echo $a . ". Sudev <br>";    #print 5 times
    $a = $a + 1;   #increment
    //$a++;
}
echo "<br>";
$a = 7;    #initialization
while ($a >= 1) {      #condition
    echo $a . ". Sudev <br>";    #print 5 times
    $a = $a - 2;   #increment
    //$a++;
}

#do while
echo "-------do while-------<br>";
$a = 0;    #initialization
do {
    echo $a . ". Hello <br>";
    $a = $a + 1;   #increment
    //$a++;
} while ($a <= 7);    #condition
echo "<br>";


$a = 7;    #initialization
do {
    echo $a . ". Hello <br>";
    $a = $a - 2;   #increment
    //$a++;
} while ($a >= 1);    #condition

#for loop
echo "------------------for loop---------------<br>";

for ($a = 7; $a >= 0; $a--) {
    echo $a . ": sudev_babu,  ";
}
echo "<br><br>";

#tabular data
echo "-----------------tabular data-----------------<br>";
for ($x = 1; $x <= 100; $x = $x + 15) {
    for ($b = $a; $b < $a + 15; $b++) {
        echo $x . " ";
    }
    echo "<br>";
}

echo "<br>";


#break and continue
echo "---------------break and continue-----------------<br>";
for ($a = 1; $a <= 10; $a++) {
    if ($a == 7) {
        continue; //break
    }
    echo $a . " ";
}
echo "<br>";
for ($a = 1; $a <= 10; $a++) {
    echo "Number :" . $a . "<br>";
}
echo"<br><br>";

for ($v = 1; $v <= 10; $v++) {
    if ($v == 3) {
      //  echo "Number :" . $v . "<br>";
        continue;
    }
    echo "Number :" . $v . "<br>";
}
