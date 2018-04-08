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

fscanf(STDIN, "%d %d %d", $r, $g, $b);

if (($r * 100 + $g * 10 + $b) % 4 == 0) {
    echo "YES\n";
} else {
    echo "NO\n";
}
