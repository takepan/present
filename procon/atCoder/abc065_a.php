<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc064/tasks/abc064_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d %d", $X, $A, $B);

if ($A >= $B) {
    echo "delicious\n";
} else if ($X + $A >= $B) {
    echo "safe\n";
} else {
    echo "dangerous\n";
}
