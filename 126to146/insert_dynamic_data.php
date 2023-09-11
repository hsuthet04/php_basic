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
    $qry =  "INSERT INTO users (name) VALUES ('$user->name')";
    mysqli_query(dbconnect(),$qry);
    // $name="";
    // foreach($result as $row){
    //     $name =$row["name"];
    // }
    // $id=$users->id;
    // $email=$tutorial->id;
    // for($i-$user->start_id;$i<-$user->end_id;$i++){
    //     $title=$name." ".$i;
    //     $qry="INSERT INTO users(id,title,created_by)VALUES($id,$title,$email) ";
    //     mysqli_query($db,$qry);
    // }
    // echo $name."<br>";
}
// $qry="SELECT * FROM users";
// $db=dbconnect();
// $result=mysqli_query($db,$qry);

// foreach($result as $item){
//     echo $item["name"]."<br>";
// }