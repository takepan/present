<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$odd = $even = $half = 0;

for ($i = 0; $i < $N; $i++) {
    switch ($a[$i] % 4) {
        case 1:
            $odd++;
            break;
        case 0:
            $even++;
            break;
        case 3:
            $odd++;
            break;
        case 2:
            $half++;
            break;
    }
}

if ($half == 0) {
    if ($odd <= $even + 1) {
        echo "Yes\n";
    } else {
        echo "No\n";
    }
} else {
    if ($odd <= $even) {
        echo "Yes\n";
    } else {
        echo "No\n";
    }
}
