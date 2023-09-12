<?php

$date1=date('a',time());
echo $date1;

$date2=date('A',time());
echo $date2;

$date3=date('d',time());
echo $date3;

$date4=date('D',time());
echo $date4;

$date5=date('F',time());
echo $date5;

date_default_timezone_set('Asia/Rangoon');
$date6=date('h',time());
echo $date6;

date_default_timezone_set('Asia/Rangoon');
$date7=date('H',time());//zeropr pya
echo $date7;

date_default_timezone_set('Asia/Rangoon');
$date8=date('G',time());//no zero
echo $date8;

$date9=date('L',time());
echo $date9;

$date10=date('m',time());
echo $date10;

$date11=date('M',time());
echo $date11;

$date12=date('r',time());
echo $date12;

$date13=date('n',time());//no zero
echo $date13;

$date14=date('Z',time());
echo $date14;