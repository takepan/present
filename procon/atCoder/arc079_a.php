<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$arr = array();

fscanf(STDIN, "%d %d", $N, $M);
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    if ($a == 1 || $b == 1) {
        $aa[$b] = 1;
    }
    if ($a == $N || $b == $N) {
        $bb[$a] = 1;
    }
}

foreach ($aa as $key => $val) {
    if (isset($bb[$key])) {
        echo "POSSIBLE\n";
        exit;
    }
}
echo "IMPOSSIBLE\n";
