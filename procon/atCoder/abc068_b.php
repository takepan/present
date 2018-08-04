<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc068/tasks/abc068_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);

$log = (int) floor(log($N, 2));

echo pow(2, $log) . "\n";
