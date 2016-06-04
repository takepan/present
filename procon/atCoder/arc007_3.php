<?php
/*
    Problem URL : http://arc007.contest.atcoder.jp/tasks/arc007_3

    Score  : 100
    Result : AC
    Time   : 66 ms
    Memory : 4892 KB
 */

// ini_set('memory_limit', '-1');
ini_set('error_reporting', E_ALL &~ E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $c);
$len_c = strlen($c);
// 変換用配列
$arr_c = array('o' => '1', 'x' => 0);
$c = str_replace(array_keys($arr_c), array_values($arr_c), $c);
$arr = array();
$target = pow(2, $len_c) - 1;

for ($i = 0; $i < $len_c; $i++) {
    $tmp = substr($c, $i) . substr($c, 0, $i);
    $tmp = bindec($tmp);
    if ($tmp == $target) {
        echo "1\n";
        exit;
    }
    $arr[$i] = $tmp;
}

$arrBase = $arr;

for ($w = 1; $w < $len_c; $w++) {
    if (DEBUG) echo $w . PHP_EOL;
    if (DEBUG) echo "array_count : " . count($arr) . PHP_EOL;
    foreach ($arr as $key => $val) {
        if (DEBUG) echo "key : " . $key . " val : $val " . PHP_EOL;
        $arrorig = explode(",", $key);
        $maxorig = max($arrorig);
        $valorig = $val;
        if (count($arrorig) != $w) {
            unset($arr[$key]);
            // echo "unset\n";
            continue;
        }
        for ($t = $maxorig+1; $t < $len_c; $t++) {
            $arrtmp = $arrorig;
            $valtmp = $valorig;

            if (DEBUG) echo "{$valtmp} | {$arrBase[$t]}\n";
            $newVal = $valtmp | $arrBase[$t];

            $arrtmp[] = $t;
            $newKey = implode(",", $arrtmp);

            if (DEBUG) echo "$newKey $newVal\n";
            $arr[$newKey] = $newVal;
            if ($newVal == $target) {
                echo $w + 1 . PHP_EOL;
                exit;
            }
        }
    }
}
