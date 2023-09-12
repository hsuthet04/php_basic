<?php

//UNIX TIME SLAMP
//coordinate universal time=> thursday 1 january 1970 UTC

date_default_timezone_set('Asia/Rangoon');
$ary=getdate();
echo "<pre>".print_r($ary,true)."</pre>";

echo $ary["seconds"];

echo "<hr>";
echo time();