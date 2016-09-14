<?php
/*
    Problem URL : http://abc044.contest.atcoder.jp/tasks/abc044_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $w);

$arr = array();
$str = str_split($w);
$len = count($str);

for ($i = 0; $i < $len; $i++) {
    $arr[$str[$i]]++;
}

foreach ($arr as $key => $val) {
    if ($val % 2 !== 0) {
        echo "No\n";
        exit;
    }
}
echo "Yes\n";
