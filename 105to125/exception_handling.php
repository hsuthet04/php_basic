<?php

$file="sushi.txt";

if(file_exists($file)){
    echo "file exist";
}else{
    exit("file not exist");
}//exit nout ka hr ty a lope ma lope

$handler=fopen($file,'r');
echo "<br>sushi is good";

