<?php

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $s);

$c1 = substr($s, 0, 1);
$c2 = strval(strlen($s) - 2);
$c3 = substr($s, -1);

echo $c1, $c2, $c3, PHP_EOL;
