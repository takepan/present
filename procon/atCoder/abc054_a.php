<?php
/*
    Problem URL : http://abc054.contest.atcoder.jp/tasks/abc054_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $A, $B);

if ($A == 1) $A += 13;
if ($B == 1) $B += 13;

if ($A == $B) {
    echo "Draw\n";
} elseif ($A > $B) {
    echo "Alice\n";
} else {
    echo "Bob\n";
}
