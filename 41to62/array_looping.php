<?php


$coffee=array("latte","cappucino","mocha","americano");

//for loop
for($i=0;$i<count($coffee);$i++){
    echo $coffee[$i]."<br>";
    //echo $coffee[1];
}

//while loop
$i=0;
while($i<count($coffee)){
    echo $coffee[$i]."<br>";
    $i++;
}

//do while loop
$i=0;
do{
    echo $coffee[$i]."<br>";
    $i++;
}while($i<count($coffee));//; ma mae nk
 
$cookie=array(
    array("choco","milk","yorgurt"),
    array("strawberry","peanut","blueberry"),
    array("pineapple","durian","mixed")
);

for($r=0;$r<count($cookie);$r++){
    print_r($cookie[$r]);
    for($s=0;$s<count($cookie[$r]);$s++){
        echo "<br>".$cookie[$r][$s];
    }
    echo "<hr>";
}
//print_r = array ka print

