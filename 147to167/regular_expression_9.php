<?php

$var1="milk tea00";

$result1=preg_replace("/[[:digit:]]/","11",$var1);
echo $result1;


$var2="milk tea";

$result2=preg_replace("/milk/","bubble",$var2);
echo $result2;


$var3="milk tea 00";
$result3=preg_replace(
            array('/milk/i','/[0-9]+/'),
            array('bubble','11'),
            $var3

);
echo "<pre>".print_r($result3,true)."</pre>";

$var4="ph no is 0192384756";
$result4=preg_replace("/[[:alpha:]]/","",$var4);
echo $result4;


$var5="bubble<span>milktea</span>";
$result5=preg_replace('/<span>.<\/span>/',"",$var5);
echo $result5;