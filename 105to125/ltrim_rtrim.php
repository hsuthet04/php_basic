<?php

$str= " Milk tea>";
 echo strlen($str)."<br>";
 $var=trim($str);//space ty ko ma twet
 echo strlen($var)."<br>";
 $var=ltrim($str);
 echo strlen($var)."<br>";
 $var=rtrim($str,">");
 echo strlen($var)."<br>";

