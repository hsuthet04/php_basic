<?php

$file="txtfile.txt";//file ma shi yin htet sout
$append=fopen($file,mode:'a');
fwrite($append,"homicide");
echo($append);