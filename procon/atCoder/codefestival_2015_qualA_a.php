<?php
/*
    Problem URL : http://code-festival-2015-quala.contest.atcoder.jp/tasks/codefestival_2015_qualA_b

    Score  : 100
    Result : AC
    Time   : 53 ms
    Memory : 4568 KB
 */

$ans = "";

fscanf(STDIN, "%s", $S);

if (substr($S, -4) == '2014') {
    $ans = substr($S, 0, strlen($S) - 4) . '2015';
}

echo $ans . PHP_EOL;
