<?php

$var="mochi sushi 123";

//$result=preg_replace('/[[:alpha:]]/',"a",$var);
//$result=preg_replace('/[[:digit:]]/',"a",$var);
//$result=preg_replace('/[[:alnum:]]/',"-",$var);//str and int
$data=preg_replace('/[[:space:]]/',"",$var);
$result=preg_match('/\s/',$var);

echo $result?"true":"false";