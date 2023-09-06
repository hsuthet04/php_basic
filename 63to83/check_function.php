<?php

function fun(){
    echo "it is function";
}

$var="fun";

$neg=function_exists($var);

if($neg){
    $var();
}else{
    echo "is is not function";
}