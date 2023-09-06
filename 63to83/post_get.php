<?php

    //isset=check
    if(isset($_GET['submit'])){
        //super global variable
        echo "Submit button was click";
    };
//? nout ta hr pyet p pyan run
//get,post
?>

<form action="<?php $_PHP_SELF ?>" method="get">
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit" name="submit">Register</button>
</form>
