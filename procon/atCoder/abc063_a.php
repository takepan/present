<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc063/tasks/abc063_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */


// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $A, $B);

if ($A + $B >= 10) {
    echo "error\n";
} else {
    echo ($A + $B) . PHP_EOL;
}
