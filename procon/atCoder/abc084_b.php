<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $A, $B);
fscanf(STDIN, "%s", $S);

$L = $A + 1 + $B;

// echo strlen($S) . PHP_EOL;
// echo $L . PHP_EOL;

$flg = true;

if (strlen($S) != $L) {
    $flg = false;
} else {
    for ($i = 0; $i < $L; $i++) {
        $t = substr($S, $i, 1);
        if ($i == $A) {
            if ($t != '-') {
                $flg = false;
            }
        } else {
            if (!is_numeric($t)) {
                $flg = false;
                break;
            }
        }
    }
}
echo ($flg ? "Yes\n": "No\n");