<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $S);

$arr = str_split($S);

if ($arr[0] == $arr[1] && $arr[1] != $arr[2] && $arr[2] == $arr[3]) {
    echo "Yes\n";
} else {
    echo "No\n";
}
