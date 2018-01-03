<?php
/*
    Problem URL : http://arc074.contest.atcoder.jp/tasks/agc016_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */


fscanf(STDIN, "%s", $s);
$a = str_split($s);
$cnt = count($a);
$arr = array();

for ($i = 0; $i < $cnt; $i++) {
    $arr[$a[$i]] = 1;
}

$k = array_keys($arr);

if (count($k) == 1) {
    echo  "0" . PHP_EOL;
    exit;
}

$ans = PHP_INT_MAX;

foreach ($k as $moji) {
    $res = solve($s, $moji);
    $ans = min($res, $ans);
}

echo $ans . "\n";

function solve($s, $moji) {
    $cnt = 0;
    while(true) {
        $cnt++;
        $newS = "";
        for ($i = 0; $i < strlen($s) - 1; $i++) {
            if (substr($s, $i, 1) == $moji) {
                $newS .= substr($s, $i, 1);
            } elseif (substr($s, $i+1, 1) == $moji ) {
                $newS .= substr($s, $i+1, 1);
            } else {
                $newS .= substr($s, $i, 1);
            }
        }
        $flg = true;
        for ($i = 1; $i < strlen($newS); $i++) {
            if (substr($newS, 0, 1) != substr($newS, $i, 1)) {
                $flg = false;
            }
        }

        if ($flg === true) {
            return $cnt;
        } else {
            $s = $newS;
        }
    }
}
