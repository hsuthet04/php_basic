<?php

$str="There is a need, there is a way";
$ary=preg_split("//",$str,5,PREG_SPLIT_OFFSET_CAPTURE);
echo "<pre>".print_r($ary,true)."</pre>";


$var1="MOCHI.sushi";
// $bol1=preg_match('/[\s]/',$var1);
$bol1=preg_match('/([^a-z]+)\.([a-z])/',$var1);

echo $bol1?"true":"false";