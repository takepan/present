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
// echo $T . PHP_EOL;

$ans = 0;

$strOther = "01346789";
for ($i = 0; $i < strlen($strOther); $i++) {
    $T = str_replace($strOther[$i], "X", $T);
}
$T = preg_replace("/22+/", "X2", $T);
$T = preg_replace("/55+/", "5X", $T);
$T = preg_replace("/X+/", "X", $T);
echo $T . PHP_EOL;
$arrT = explode("X", $T);
$arrT = array_unique($arrT);
foreach ($arrT as $key => $obj) {
    $arrT[$key] = ltrim($arrT[$key], "5");
    $arrT[$key] = rtrim($arrT[$key], "2");

    echo $arrT[$key] . " -> ";

    $len = strlen($arrT[$key]);
    $flag = false;
    $pre_Q = 0;
    $post_Q = 0;

    $posQ = strpos($arrT[$key], "?");

    $str1 = "";
    if ($posQ == 0) {
        $pos2 = strpos($arrT[$key], "2");
        $pos5 = strpos($arrT[$key], "5");
        // if ($pos2 === false) $pos2 = PHP_INT_MAX;
        if ($pos5 === false) $pos5 = PHP_INT_MAX;
        var_dump($pos5);
        if ($pos2 < $pos5) {
            // 2が先
            $head = floor($pos2 / 2);
            $str1 = str_repeat("25", $head);
            $str2 = substr($arrT[$key], $pos2);
            $arrT[$key] = $str1 . $str2;
        } else {
            // 5が先
            $head = floor(($pos5 - 1) / 2);
            $str1 = str_repeat("25", $head) . "2";
            $str2 = substr($arrT[$key], $pos5);
            $arrT[$key] = $str1 . $str2;
        }

    }
    echo "{$arrT[$key]} {$pos5}\n";
}
// var_dump($arrT);

