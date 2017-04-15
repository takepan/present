<?php
/*
    Problem URL : http://abc056.contest.atcoder.jp/tasks/abc056_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%s %s", $a, $b);

switch ($a) {
    case "H":
        $a = true;
        break;
    case "D":
        $a = false;
        break;
}
if ($b == "D") {
    $a = !$a;
}
echo $a === true ? "H\n" : "D\n";
