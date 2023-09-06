<?php

$a=10;
$b=&$a;//& ka 2 ku lone tuu ag lope
//$b=$a;

$a=20;

echo "value a is ".$a;
echo "value b is ".$b;
echo "<br>";

//function

$num=10;
function age(&$num){
    $num=20;
    echo $num;
}
age($num);
echo "<br>";
echo $num;


