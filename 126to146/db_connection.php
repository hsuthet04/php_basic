<?php

define("DB_HOST","Localhost");
define("DB_NAME","test");
define("DB_USER","root");
define("DB_PASS","");

function dbconnect(){
    $db=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    echo "<pre>".print_r($db,true)."</pre>";
    //errdubbger($db);
    //echo mysqli_connect_error()>0? "connection error" : "connnection success";
    //error check
}
function errdubbger($data){
    echo"<pre>".print_r($data,true)."</pre>";
}
dbconnect();
