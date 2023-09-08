<?php

$file="sushi.txt";

try{
    if(file_exists($file))
        echo "file exist";
    else
        throw new Exception("file not found");//msg kyan
    }catch(Exception $e){
    echo $e->getMessage();//->thate nrr ma lal
}    

?>