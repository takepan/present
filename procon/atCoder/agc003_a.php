<?php
/*
    Problem URL : http://agc003.contest.atcoder.jp/tasks/agc003_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $S);
$arrS = str_split($S);
$arr = array();

for ($i = 0; $i < count($arrS); $i++) {
    $arr[$arrS[$i]] = 1;
}

$arrX = $arr['N'] - $arr['S'];
$arrY = $arr['W'] - $arr['E'];

if ($arrX === 0 && $arrY === 0) {
    echo "Yes\n";
} else {
    echo "No\n";
}
