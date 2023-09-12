<?php

$var="mochi sushi";

$cake=preg_match("/sushi/i",$var);//sensitive ma phit ag
$cake=preg_match("+sushi+",$var);
$cake=preg_match("!sushi!",$var);
$cake=preg_match("#sushi#",$var);
$cake=preg_match("%sushi%",$var);



echo $cake?"true":"false";