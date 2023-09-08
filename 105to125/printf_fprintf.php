<?php

$num=50000;
$city="Yangon";
$val=50.5;

//%u=int
//%s=str

printf("There are %u of people in %s.Double value is %f",$num,$city,$val);

$file="text.txt";
$handler=fopen($file,'w');
fprintf($handler,"There are %u in %s.Double value is %f",$num,$city,$val);