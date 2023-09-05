<?php

$num=0;

while($num<15){
    if($num==10){
        echo "Valuse is $num<br>";
        break;
        //continue;
    }else{
        echo "Valuse is $num<br>";
        $num+=2;
    }
}

?>