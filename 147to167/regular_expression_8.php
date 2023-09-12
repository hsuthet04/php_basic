<?php

$var1="Mochi Sushi123";

$bol1=preg_match('/[A-Z]/',$var1);

echo $bol1?"true":"false";


$var2="sushi@gmail.com";

$bol2=preg_match('/[a-zA-Z]+@[a-z]+\.[a-z]{3}/',$var2);

echo $bol2?"true":"false";


$var3="Sushi includes rice and fish";

if(preg_match('/rice/',$var3)){
    echo "we got sushi.";
}

