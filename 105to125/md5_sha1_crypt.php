<?php

$pass="123456";

$pass=md5($pass,true);//false ka po myrr
echo $pass."<br>";

$pass=sha1($pass,false);
echo $pass."<br>";

$pass=crypt($pass,$pass);//2 ku shi ny ya ml
echo $pass."<br>";

$pass=md5($pass);
$pass=sha1($pass);
$pass=crypt($pass,$pass);

echo $pass;