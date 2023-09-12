<?php

$ary=["hsuthet04@localhost,lulu04@localhost,tester@localhost"];


$to=implode(',',$ary);
$subject="PHP MAIL TEST";
$message="i want to go home";
$header="From:mmphptuto@gmail.com";

mail($to,$subject,$message,$header);