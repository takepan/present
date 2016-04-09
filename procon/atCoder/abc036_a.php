<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$fp = fopen("php://stdin", "r+");
list($A, $B) = explode(" ", trim(fgets($fp)));

echo ceil($B / $A) . PHP_EOL;

?>
