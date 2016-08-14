<?php
/*
    Problem URL : http://arc059.contest.atcoder.jp/tasks/arc059_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $s);
$sLen = strlen($s);
$arrS = str_split($s);

for ($i = 1; $i < $sLen; $i++) {
    if ($i != 1) {
        if ($arrS[$i] == $arrS[$i-2]) {
            echo ($i - 1) . " " . ($i + 1) . "\n";
            exit;
        }
    }
    if ($arrS[$i] == $arrS[$i-1]) {
        echo $i . " " . ($i + 1) . "\n";
        exit;
    }
}
echo "-1 -1\n";
