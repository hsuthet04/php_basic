<?php

$str="There is a \fish in the pond!";
echo $str."<br>";

$result=preg_quote($str,'e');
echo $result;