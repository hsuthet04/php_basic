<?php

$ary=array();

echo count($ary)."<br>";

array_push($ary,"bubble");
array_push($ary,"milk");//insrt data into array
array_push($ary,"tea");

array_pop($ary);//remove

array_shift($ary);

echo count($ary)."<br>";



echo $ary[0];