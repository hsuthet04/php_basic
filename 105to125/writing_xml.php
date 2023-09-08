<?php

$ary=array(
    "name"=>"pisi",
    "age"=>19,
    "subject"=>"php"
);
$str="";
$str .="<coder>";
foreach($ary as $key=>$val){
    $str .="<".$key.">";
    $str .=$val;
    $str .="</".$key.">";
}
$str .="</coder>";
 $handler=fopen("writing.xml",'w');
 fprintf($handler,"%s",$str);