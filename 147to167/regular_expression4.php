<?php

$var="mochi sushi";
//p+ at least one p
//p* zero or more p
//p? zero or more p
//p{number} number
//p{2,3} range 2 or 3
//p{2,} range 2 or more


$cake=preg_match("/s*/",$var);
$cake=preg_match("/s{3}/",$var);
$cake=preg_match("/s{2,3}/",$var);


echo $cake?"true":"false";