<?php

echo rand(0,100);//between 0 and 100
echo "<br>".getrandmax();
echo "<br>".microtime();
srand(microtime() * 10000000);
echo rand();