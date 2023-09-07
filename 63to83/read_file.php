<?php

$file="mytxtFile.txt";//file path 
$handler=fopen($file,mode:'r');
$size=filesize($file);
$data=fread($handler,$size);
echo $data;
