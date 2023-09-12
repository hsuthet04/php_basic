<?php

//^$ empty str
$var1="mochi sushi 123";

$bol1=preg_match('/^$/',$var1);

echo $bol1?"true":"false";

//p\wp/i
$var2="phhp";

$bol2=preg_match('/p\w{2}p/',$var2);//start with p+2 chrs+end with p

echo $bol2?"true":"false";
