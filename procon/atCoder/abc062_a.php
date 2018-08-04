<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$GroupA = array(1, 3, 5, 7, 8, 10, 12);
$GroupB = array(4, 6, 9, 11);

fscanf(STDIN, "%d %d", $x, $y);
if (in_array($x, $GroupA) && in_array($y, $GroupA)) {
    echo "Yes\n";
} else if (in_array($x, $GroupB) && in_array($y, $GroupB)) {
    echo "Yes\n";
} else {
    echo "No\n";
}
