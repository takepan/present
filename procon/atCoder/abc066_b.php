<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc066/tasks/abc066_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $S);

$ans = 0;

for ($i = 2; $i < strlen($S); $i += 2) {
    $strA = substr($S, 0, $i / 2);
    $strB = substr($S, $i / 2, $i / 2);
    if ($strA == $strB) {
        $ans = $i;
    }
}

echo $ans . PHP_EOL;
