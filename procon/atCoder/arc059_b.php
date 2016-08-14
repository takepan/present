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
// echo "length: {$sLen}\n";
$arrS = str_split($s);
// var_dump($arrS);
// exit;
$arr = array();

for ($l = 2; $l <= $sLen; $l++) {
    // echo "Length:{$l}\n";
    $arr = array();
    // 最初のl文字
    for ($i = 0; $i < $l; $i++) {
        $arr[$arrS[$i]]++;
        if ($arr[$arrS[$i]] > $l / 2) {
            echo "1 " . ($i + 1) . "\n";
            exit;
        }
    }

    // echo "AAA\n";
    // var_dump($arr);

    for ($i = $l; $i < $sLen; $i++) {
        // echo "i文字目: {$i}\n";
        // echo "FROM:";
        // var_dump($arr);
        $arr[$arrS[$i-$l]]--;
        $arr[$arrS[$i]]++;
        // echo "TO:";
        // var_dump($arr);
        // echo "MOJI: {$arrS[$i]}\n";
        if ($arr[$arrS[$i]] > $l / 2) {
            // var_dump($arr);
            echo ($i - $l + 2) . " " . ($i + 1) . "\n";
            exit;
        }
    }
}

echo "-1 -1\n";
