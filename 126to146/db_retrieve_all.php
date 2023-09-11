<?php

define("DB_HOST","Localhost");
define("DB_NAME","test");
define("DB_USER","root");
define("DB_PASS","");

function dbconnect(){
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno() > 0) { // Corrected line
        die("Connection fail: " . mysqli_connect_error());
    } else {
        return $db;
    }
}
function execute($qry){
    $db=dbconnect();
    $result=mysqli_query($db,$qry);
   
    if(mysqli_num_rows($result)>0){
        foreach($result as $item){
    
            echo "id is = ".$item["id"]."<br>";
            echo "name is = ".$item["name"]."<br>";
            errdubbger($item);
        
        }
    }   
}
function retrieve($id){
    $qry="SELECT * FROM users WHERE id = 1";
    $db=dbconnect();
    print_r($db);
    $result=mysqli_query($db,$qry);
    if(mysqli_num_rows($result)>0){
        foreach($result as $data){
            echo "id is ".$data["id"]."<br>";
            echo "name is ".$data["name"];
        }
    }
        
}
    

    function errdubbger($data){
        echo"<pre>".print_r($data,true)."</pre>";
}
    $qry="SELECT * FROM users";
   
    $qry="SELECT * FROM users WHERE id!=4";
    
    execute($qry);
    