<?php
/*
    Problem URL : http://code-festival-2014-quala.contest.atcoder.jp/tasks/code_festival_qualA_b

    Score  : 100
    Result : AC
    Time   : 68 ms
    Memory : 4152 KB
 */

fscanf(STDIN, "%s", $S);
fscanf(STDIN, "%d", $N);
$arrS = str_split($S);
$lenS = count($arrS);
echo $arrS[($N - 1)%$lenS] . PHP_EOL;
