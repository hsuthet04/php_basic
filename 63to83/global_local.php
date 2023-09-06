<?php

$var=20;
$num=40;
//function a pyin ka global

function func(){
    global $var;
    echo $var;
    //function a htel ka local
}
func();

?>