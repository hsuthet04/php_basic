<?php

function func(){
    static $val=0;//static so ma pyet
    $val+=2;
    echo $val;
}
 func();
 echo "<br>";
 func();
 echo "<br>";
 func();
 echo "<br>";

