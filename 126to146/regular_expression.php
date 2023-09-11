<?php

// cake=>check cake in str
// ^cake=>check cake at the start
// cake$=>check cake at the end
// ^cake$=>ceck cake only in str

$var="mochi sushi";

$cake=preg_match("/sushi/",$var);

echo $cake?"true":"false";