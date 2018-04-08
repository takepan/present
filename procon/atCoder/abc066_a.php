<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc066/tasks/abc066_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$a = explode(" ", trim(fgets(STDIN)));

echo (array_sum($a) - max($a)) . PHP_EOL;
