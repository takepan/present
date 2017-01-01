<?php
/*
    Problem URL : http://arc064.contest.atcoder.jp/tasks/arc064_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $s);
$len = strlen($s);
$ad = array();
$ans = 0;
$t1 = $s[0];
$t2 = $s[1];
$cursor = 2;

while ($cursor < $len) {
    echo "{$t1} {$t2} {$s[$cursor]} ";
    if ($t1 != $s[$cursor]) {
        echo "+";
        $s[$cursor] = null;
        $cursor++;
        $ans++;
    } else {
        echo "-";
        $t1 = $t2;
        $t2 = $s[$cursor];
        $cursor++;
    }
    echo PHP_EOL;
}

echo $ans . PHP_EOL;
