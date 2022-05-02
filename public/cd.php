<?php
 print "Hello World";
$str = file_get_contents('new.json');
print($str);
 $json = json_decode($str, true); // decode the JSON into an associative array
 echo '<pre>' . print_r($json, true) . '</pre>';
echo '<pre> asdf </pre>';