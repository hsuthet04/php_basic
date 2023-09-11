<?php

define("DB_HOST","Localhost");
define("DB_NAME","test");
define("DB_USER","root");
define("DB_PASS","");

function dbconnect(){
    $db=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno() > 0) { // Corrected line
        die("Connection fail: " . mysqli_connect_error());
    }else{
        return $db;
    }
}

function pass($pass){
    $pass=md5($pass);
    $pass=sha1($pass);
    $pass=crypt($pass,$pass);
    return $pass;
}

function errdubbger($data){
    echo"<pre>".print_r($data,true)."</pre>";
}
$users=json_decode(file_get_contents("users.json"));
foreach($users as $user){
    //echo $users->name;
    echo $user->name;
    echo $user->email;
    
    $qry="INSERT INTO users VALUES ($user->id,'$user->name','$user->email','$user->password')";
    mysqli_query(dbconnect(), $qry);
    
}