<?php
/*
    ソートあれこれ

    バブルソート、カウンティングソート、ビルトインソート

    参考URL：
    http://www.ics.kagoshima-u.ac.jp/~fuchida/edu/algorithm/sort-algorithm/speed-compare.html
    http://judge.u-aizu.ac.jp/onlinejudge/description.jsp?id=ALDS1_6_A&lang=jp
    http://qiita.com/mpyw/items/e6ef473fe3464599f498
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$sortNumber = 10000;
$displayNum = 25;

echo "sort volume is {$sortNumber}\n";

$arr = range(1, $sortNumber);
shuffle($arr);

echo "shuffle ... \n";

$arr2 = $arr;

$arrCount = count($arr);

if ($sortNumber <= $displayNum) {
    echo "original data:\n";
    for ($i = 0; $i < $arrCount; $i++) {
        echo $arr[$i] . " ";
    }
    echo "\n\n";
}

$startA = microtime(true);
$arr = bubbleSort($arr);
$finishA = microtime(true);
$arrCount = count($arr);
if ($sortNumber <= $displayNum) {
    echo "bubbleSort :\n";
    for ($i = 0; $i < $arrCount; $i++) {
        echo $arr[$i] . " ";
    }
    echo "\n\n";
}


$arr = $arr2;
// $arrCount = count($arr);
// for ($i = 0; $i < $arrCount; $i++) {
//     echo $arr[$i] . " ";
// }
// echo "\n";
$startB = microtime(true);
$arr = countingSort($arr);
$finishB = microtime(true);
$arrCount = count($arr);
if ($sortNumber <= $displayNum) {
    echo "countingSort :\n";
    for ($i = 0; $i < $arrCount; $i++) {
        echo $arr[$i] . " ";
    }
    echo "\n\n";
}

$arr = $arr2;
// $arrCount = count($arr);
// for ($i = 0; $i < $arrCount; $i++) {
//     echo $arr[$i] . " ";
// }
// echo "\n";
$startC = microtime(true);
sort($arr);
$finishC = microtime(true);
$arrCount = count($arr);
if ($sortNumber <= $displayNum) {
    echo "built-in sort :\n";
    for ($i = 0; $i < $arrCount; $i++) {
        echo $arr[$i] . " ";
    }
    echo "\n\n";
}

printf("bubbleSort   : %.f sec\n", $finishA - $startA);
printf("countingSort : %.f sec\n", $finishB - $startB);
printf("built-in     : %.f sec\n", $finishC - $startC);

function bubbleSort($arr)
{
    $cnt = count($arr);
    for ($i = 0; $i < $cnt; $i++) {
        for ($j = 0; $j < $cnt - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $tmp;
            }
        }
    }
    return $arr;
}

function countingSort($arr)
{
    $mmax = -PHP_INT_MAX;

    $arrCount = array();
    $arrNew = array();
    $cnt = count($arr);
    for ($i = 0; $i < $cnt; $i++) {
        $arrCount[$arr[$i]]++;
        $mmax = max($arr[$i], $mmax);
    }
    for ($i = 1; $i <= $mmax; $i++) {
        $arrCount[$i] = $arrCount[$i-1] + $arrCount[$i];
    }
    for ($i = $cnt - 1; $i >= 0; $i--) {
        $arrNew[$arrCount[$arr[$i]]-1] = $arr[$i];
        $arrCount[$arr[$i]]--;
    }
    return $arrNew;
}
