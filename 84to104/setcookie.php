<?php

function mySetcookie(){
    //time ty ka second nk pya
    //name,value/expire/path/domain/secure
    setcookie('cookies','foods',time()+3600,
    '/','',0);

}
function myGetcookie(){
    if(isset($_COOKIE['cookies'])){
        echo $_COOKIE['cookies'];
    }else{
        echo "There is no cookie set with that key";
    } 
    
}
//mySetcookie();
myGetcookie();
