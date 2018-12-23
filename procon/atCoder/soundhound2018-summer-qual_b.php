<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $S);
fscanf(STDIN, "%d", $w);

$arrS = str_split($S);

for ($i = 0; $i < count($arrS); $i += $w) {
    echo $arrS[$i];
}
echo PHP_EOL;
