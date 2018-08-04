<?php
/*
    Problem URL : http://abc058.contest.atcoder.jp/tasks/abc058_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $a, $b, $c);

if ($b - $a == $c - $b) {
    echo "YES\n";
} else {
    echo "NO\n";
}
