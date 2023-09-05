<?php

function fun($num1,$num2,$num3){
    echo $num1,$num2,$num3;
}
    fun(num1:5,num2:10,num3:15);

//default parameters
function fcn($num=1){//1 ka alope ma lope
    echo "<br>".$num;
} 
    fcn(num:5);