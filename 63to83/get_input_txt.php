<?php

    if(isset($_GET['submit'])){
        $name=$_GET['username'];
        $pw=$_GET['password'];
        echo "Your username is". $name;
        echo "Your password is". $pw;
    }

?>

<form action="<?php $_PHP_SELF ?>"method="get">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit" name="submit">Register</button>


</form>