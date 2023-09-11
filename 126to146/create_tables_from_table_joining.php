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

$qry="CREATE TABLE IF NOT EXISTS userrr(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) NOT NULL,
    creator INT(10) NOT NULL,
    email VARCHAR(225) NOT NULL,
    password VARCHAR(225) NOT NULL,
    UNIQUE KEY email(email));";

// $qry="CREATE TABLE IF NOT EXISTS tutorial_view(
//     id INT(10) NOT NULL PRIMARY KEY,
//     static_view INT(10) NOT NULL,
//     unique_view INT(10) NOT NULL,
//     );";


    $result= mysqli_query(dbconnect(),$qry);
    echo $result?"created successfully":"create fail";
    