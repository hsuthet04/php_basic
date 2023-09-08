<?php

$xml=<<<START
<coder>
<name>pisi</name>
<age>19</age>
<subject>php</subject>
</coder>
START;

$data=simplexml_load_string($xml);
print_r($data);

/*$data=simplexml_load_file("data.xml");

print_r($data)."<br>";
foreach($data as $key=>$val){
    echo $key."<br>";

}*/

