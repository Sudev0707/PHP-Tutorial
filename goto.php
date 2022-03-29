<?php

for ($a = 1; $a <= 10; $a++) {
    if($a==3){
        goto jump; //jump is a label
    }
    //echo $a." ";
}
echo"good morning";  //this line wiil not printed

//defining label
jump:
echo"Hello, This is sudev Majhi";

echo"<br>";
?>

<?php
echo "&#128526; Hello Sudev ";
echo "babu ";
goto label;
echo "Hello world";
echo "PHP";

label:
echo "&#128540;Hey, This is new label";

?>

