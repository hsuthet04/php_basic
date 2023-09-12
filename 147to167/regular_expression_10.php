<?php

$str="There is a need, there is a way";
$ary=preg_split("/[\s]/",$str);
echo "<pre>".print_r($ary,true)."</pre>";

$ary2=preg_split("/[\s]/",$str,3);
echo "<pre>".print_r($ary2,true)."</pre>";

$ary3=preg_split("/[\s,]/",$str,NULL,PREG_SPLIT_NO_EMPTY);
echo "<pre>".print_r($ary3,true)."</pre>";