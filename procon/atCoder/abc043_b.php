<?php
/*
    Problem URL : http://abc043.contest.atcoder.jp/tasks/abc043_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%s", $s);
$arrS = str_split($s);
$lenS = count($arrS);
$ans = "";

for ($i = 0; $i < $lenS; $i++) {
    switch ($arrS[$i]) {
        case "0":
            $ans .= "0";
            break;

        case "1":
            $ans .= "1";
            break;

        case "B":
            $ans = substr($ans, 0, strlen($ans) - 1);
            break;
    }
}

echo $ans . PHP_EOL;
