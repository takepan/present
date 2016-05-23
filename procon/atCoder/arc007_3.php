<?php
/*
    Problem URL : http://arc007.contest.atcoder.jp/tasks/arc007_3

    Score  :
    Result :
    Time   :  ms
    Memory :  KB
 */
ini_set('memory_limit', '-1');
ini_set('error_reporting', E_ALL &~ E_NOTICE);

define('DEBUG', true);
// define('DEBUG', false);

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
    }
    $arr[$i] = $tmp;
}

$arrBase = $arr;

for ($w = 1; $w < $len_c; $w++) {
    echo $w . PHP_EOL;
    echo "array_count : " . count($arr) . PHP_EOL;
    foreach ($arr as $key => $val) {
        if (DEBUG) echo "key : " . $key . " val : $val " . PHP_EOL;
        $arrorig = explode(",", $key);
        $valorig = $val;
        if (count($arrorig) != $w) {
            unset($arr[$key]);
            // echo "unset\n";
            continue;
        }
        for ($t = 0; $t < $len_c; $t++) {
            if (in_array($t, $arrorig) === false) {
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
}
