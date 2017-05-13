<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));

$t = $C;
while($t < 10000) {
    if ($t % $A == 0) {
        echo "YES\n";
        exit;
    }
    $t += $B;
}
echo "NO\n";
