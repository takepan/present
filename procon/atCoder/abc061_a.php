<?php
/*
    Problem URL : http://agc013.contest.atcoder.jp/tasks/agc013_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */


define('DEBUG', true);
// define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $A, $B, $C);

if ($A <= $C && $C <= $B) {
    echo "Yes\n";
} else {
    echo "No\n";
}
