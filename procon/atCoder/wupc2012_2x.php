<?php
/*
    Problem URL : http://wupc2012.contest.atcoder.jp/tasks/wupc2012_2

    Score  :
    Result :
    Time   :  ms
    Memory :  KB
 */

$S = array();

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s", $S[$i]);
}

var_dump($S);
sort($S);
var_dump($S);

echo min($S[0] . $S[1], $S[1] . $S[0]) . PHP_EOL;