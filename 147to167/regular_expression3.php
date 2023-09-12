<?php

$var="mochi sushi 1234567890";

$cake=preg_match("/[0-9]/",$var);
$cake=preg_match("/[a-z]/",$var);
$cake=preg_match("/[a-z]|[A-Z]/",$var);
$cake=preg_match("/^[m]/",$var);
$cake=preg_match("/[^a-z]/",$var);

echo $cake?"true":"false";