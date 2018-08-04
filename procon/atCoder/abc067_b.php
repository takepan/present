<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc067/tasks/abc067_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $N, $K);
$a = explode(" ", trim(fgets(STDIN)));

rsort($a);

$ans = 0;
for ($i = 0; $i < $K; $i++) {
    $ans += $a[$i];
}

echo $ans . PHP_EOL;
