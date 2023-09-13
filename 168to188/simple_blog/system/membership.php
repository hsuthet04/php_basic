<?php

function registerUser($username,$email,$password){

}

function usernameCheck($username){
//char>6
//a-z A-Z 0-9
    if(strlen($username)>=6){
        $bol=preg_match('/^[\w]+$/',$username);
        return $bol;
    }else{
        return false;
    }
}

function emailCheck($email){
//@.com
//chr>15
    if(strlen($email)>=15){
        $bol=preg_match('/[a-zA-Z0-9]+@[a-z]=\.[a-z]{2,4}+$/',$email);
        return $bol;
    }else{
        return false;
}
}
$bol=emailCheck("lululu@gmaill.com");
echo $bol?"true":"false";

function passwordCheck($password){
//small,capital letter
//special chr
//digit num
    if(strlen($password)>=6){
        $bol=preg_match('/^(?=.*[a-z])(?=.*[A-Z])+$/',$password);
         return $bol;
    }else{
        return false;
}
}
// $bol=passwordCheck("lulu@gmail.com");
// echo $bol?"true":"false";

