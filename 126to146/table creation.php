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

function insert($qry){
    $db=dbconnect();
    $result=mysqli_query($db,$qry);
    echo $result>0?"data insert successfullu":"data insert fail";
}
function insertunique($name,$email,$pass){
        
        $qry="SELECT * FROM users WHERE name='$name'";
        $db=dbconnect();
        $ret=mysqli_query($db,$qry);
        
        if(mysqli_num_rows($ret)>0){
            echo "user name is already in use";
        }else{
            $qry="INSERT INTO users(name,email,password)
                VALUES ('$name','$email','$pass')";
            
            $result=mysqli_query($db,$qry);
            echo $result>0?"data insert successfully":"data insert fail";
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
function multiinsert($qry){
    $db=dbconnect();
    $result=mysqli_multi_query($db,$qry);
    echo $result ? "data insert successfully".mysqli_insert_id($db):"data insert fail";
}
function delete($name){
    $qry="DELETE FROM users WHERE name='$name'";
    $db=dbconnect();
    $result=mysqli_query($db,$qry);
    echo $result?"Deleted":"deleta fail";
}
function update($qry){
    $qry="UPDATE users SET name='chocolate' WHERE name='icecream'";
    $db=dbconnect();
    $result=mysqli_query($db,$qry);
    echo $result?"updated":"update fail";

}
    $qry="SELECT * FROM users";
    $pass=pass(123);
    
    // $qry="INSERT INTO users VALUES(0,'cake','cake@gmail.com','$pass');";
    // $qry.="INSERT INTO users VALUES(0,'icecream','icecream@gmail.com','$pass');";
    // $qry.="INSERT INTO users VALUES(0,'coke','coke@gmail.com','$pass');";
   
    $qry="SELECT * FROM users";
    
    $qry="CREATE TABLE subjects(
        id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(225) UNIQUE NOT NULL,
        created_at date,
        updated_at date
        );";

    $result =mysqli_query(dbconnect(),$qry);
    echo $result ? "table created":"create fail";


