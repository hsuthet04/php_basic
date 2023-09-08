<?php

$str="sushi is the best and sashimi is the worst";

echo strpos($str,"the")."<br>";
echo strrpos($str,"the")."<br>";
echo stripos($str,"The")."<br>";//a kye a thyy ma lo
echo strripos($str,"The")."<br>";//a kye a thyy ma lo

$var=str_word_count($str);//grouo lite
echo $var."<br>";
$var=substr($str,0,strlen($str));//text ty 
echo $var."<br>";
$var=chunk_split($str,3,"/");
echo $var;