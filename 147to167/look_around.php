<?php

//positive look ahead
$str="mochi";//$str="m1ochi";
$bol=preg_match('/m(?=o)/',$str);//m nout mr c lite ma lite
//$bol=preg_match('/m(?=\d)/',$str);

echo $bol?"true":"false";


//positive look behind
$str="mochi";
$bol=preg_match('/(?<=o)c/',$str);//?<=

echo $bol?"true":"false";


//negative look ahead
$str="mochi";
$bol=preg_match('/m(?!o)/',$str);//pyg pyan htwet

echo $bol?"true":"false";


//negative look behind
$str="mochi";
$bol=preg_match('/(?<!o)c/',$str);//pyg pyan htwet

echo $bol?"true":"false";


//testing
$pass="pisi123Pisi";
$bol=preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/',$pass);

echo $bol?"true":"false";