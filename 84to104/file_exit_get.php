<?php
function check($filename){
    if(file_exists($filename)){
        $handler=fopen($filename,'r');
        $size=filesize($filename);
        $data=fread($handler,$size);
        //$data=file_get_contents($filenme);//get method
        return $data;
    }else{
        echo "File not found";
    }
}
    echo check("function.txt");