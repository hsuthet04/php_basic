<?php

$file="json_dec.json";
    $handler=fopen($file,'r');
    $json=fread($handler,filesize($file));
    
    $ary=json_decode($json);
    //print_r($ary);

foreach($ary as $key=>$val){
    foreach($val as $k=>$val){
        echo "key is ".$key."value is ".$val;
    }
}