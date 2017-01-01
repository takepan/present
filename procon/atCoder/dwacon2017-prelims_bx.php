<?php
/*
    Problem URL : http://abc049.contest.atcoder.jp/tasks/abc049_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $T);

$str2525 = str_repeat("25", 100000);

$del = array("0", "1", "3", "4", "6", "7", "8", "9");
foreach ($del as $moji) {
    $T = str_replace($moji, "X", $T);
}
$T = preg_replace("/X+/", "X", $T);
$T = preg_replace("/22+5/", "X25", $T);
$T = preg_replace("/55+2/", "5X2", $T);
$T = preg_replace("/255+/", "25X", $T);
$T = preg_replace("/522+/", "5X2", $T);

$arr = explode("X", $T);
$ans = 0;

// すべて？
if (preg_match("/^\?+$/", $T)) {
    $score = floor(strlen($T) / 2);
    exit ($score . PHP_EOL);
}



var_dump($arr);

foreach ($arr as $str) {
    if (preg_match("/^\?+$/", $str)) {
        $score = floor(strlen($str) / 2);
    } else {
        preg_match("/(2|5)\?+(2|5)/", $str, $reg);
        var_dump($reg);
    }


    $ans = max($score, $ans);

}
echo $ans . PHP_EOL;