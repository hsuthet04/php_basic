<?php

$p1=0;
$p2=0;
$s=0;

for($i=0;$i<100;$i++){
    $player1=rand(0,6);
    $player2=rand(0,6);
    if($player1>$player2){
        $p1++;
    }else if($player1==$player2){
        $s++;
    }else{
        $p2++;
    }

}
echo "Player1 win" . $p1 ."times<br>";
echo "Player2 win" . $p2 ."times<br>";
echo "There were" . $s ."times draw";