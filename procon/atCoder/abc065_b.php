<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc065/tasks/abc065_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$m = array();
$cursor = 1;
$ans = 0;

for ($i = 1; $i <= $N; $i++) {
    fscanf(STDIN, "%d", $a[$i]);
}

while(true) {
    $ans++;
    $cursor = $a[$cursor];
    if ($m[$cursor] == 1) {
        echo "-1\n";
        exit;
    }
    $m[$cursor] = 1;
    if ($cursor == 2) {
        echo $ans . PHP_EOL;
        exit;
    }
}
