<?php

$var="mochi sushi 123";

$bol=preg_match('/s.s/',$var);//sus
echo $bol?"true":"false";

$bol2=preg_match('/^.{2}$/',$var);//^ start $ end total 2 chr 
echo $bol2?"true":"false";//2 ku htet myrr loh false


//<b>(.*)</b>
$var2="<b>abcd</b>";
$bol3=preg_match('/<b>(.*)<\/b>/',$var2);//0 or more
echo $bol3?"true":"false";


//p(hp)*
$var3="php";
$bol4=preg_match('/p(hp)+/',$var3);//start wth p end with hp
echo $bol4?"true":"false";

//\d only digit
//\s white space
$var4="ph p";
$bol5=preg_match('/\s/',$var4);//start wth p end with hp
echo $bol5?"true":"false";

//\w word chr a-z A-Z 0-9
//\W non-word chr -_,