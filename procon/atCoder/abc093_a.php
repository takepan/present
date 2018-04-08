<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $S);
$arrS = str_split($S);
$arrC = array_pad(array(), 3, 0);

for ($i = 0; $i < count($arrS); $i++) {
    $cd = ord($arrS[$i]) - ord('a');
    $arrC[$cd]++;
}

if (max($arrC) === 1) {
    echo "Yes\n";
} else {
    echo "No\n";
}
