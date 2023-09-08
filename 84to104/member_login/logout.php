<?php

session_start();
//session_destroy();

unset($_SESSION['name']);
unset($_SESSION['password']);

header("Location:index.php");
include "links.php";


?>
<h1>Log out</h1>
