<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc064/tasks/abc064_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

echo (max($a) - min($a)) . PHP_EOL;
