<?php
/*
    Problem URL : http://abc058.contest.atcoder.jp/tasks/abc058_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $O);
fscanf(STDIN, "%s", $E);

for ($i = 0; $i < strlen($O); $i++) {
    $ans .= $O[$i];
    $ans .= $E[$i];
}
echo $ans . PHP_EOL;
