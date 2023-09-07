<?php

$file="txtfile.txt";
$write=fopen($file,mode:'w');
fwrite($write,"Hello world");
fclose($write);