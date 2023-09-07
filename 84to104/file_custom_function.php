<?php

function createFile($filename){
    $fnc=fopen($filename,'w');
    fclose($fnc);
}
function writeFile($filename,$data){
    $fnc=fopen($filename,'w');
    fwrite($fnc,$data);
    fclose($fnc);
}
function appendFile($filename,$data){
    $fnc=fopen($filename,'a');
    fwrite($fnc,$data);
    fclose($fnc);
}
function readmyFile($filename){
    $fnc=fopen($filename,'r');
    $size=filesize($filename);
    $data=fread($fnc,$size);
    fclose($fnc);
    return $data;
}
createFile('function.txt');
writeFile('function.txt','I am alien');
appendFile('function.txt','jk');
echo readmyFile('function.txt');