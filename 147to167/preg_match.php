<?php

$str="we strat learning php at 7:30 am and finish learning at 5:30 pm";

preg_match_all("/(\d+:+\d)/",$str,$matches,PREG_SET_ORDER);

echo "<pre>".print_r($matches,true)."</pre>";


preg_match_all("/(\d+:+\d+)\s*(am|pm)/",$str,$matches,PREG_SET_ORDER);

echo "<pre>".print_r($matches,true)."</pre>";


preg_match_all("/(\d+:+\d+)\s*(am|pm)/",$str,$matches,PREG_PATTERN_ORDER);

echo "<pre>".print_r($matches,true)."</pre>";