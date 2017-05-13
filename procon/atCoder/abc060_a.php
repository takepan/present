<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));

$Alast = substr($A, -1, 1);
$Bfirst = substr($B, 0, 1);
$Blast = substr($B, -1, 1);
$Cfirst = substr($C, 0, 1);

if (($Alast == $Bfirst) && ($Blast == $Cfirst)) {
    echo "YES\n";
} else {
    echo "NO\n";
}
