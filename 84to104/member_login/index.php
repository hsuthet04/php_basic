<?php

session_start();//shae sone mr phit ya ml


include "links.php";
if(isset($_POST['submit'])){
    $user=$_POST['name'];
    $pass=$_POST['password'];

    if($user == "lulu" && $pass == "123"){
    $_SESSION['name']=$user;
    $_SESSION['password']=$pass;
    header("Location:member.php");
    }
    else echo "u r not user";
}

?>
<h1>INDEX PAGE</h1>
<form action="<?php $_PHP_SELF; ?>" method="post">
    <input type="text" name="name" placeholder="username"><br>
    <input type="password" name="password"><br>
    <button type="submit" name="submit">Login</button>
</form>

