<?php
/*
    Problem URL : http://wupc2012.contest.atcoder.jp/tasks/wupc2012_2

    Score  : 100
    Result : AC
    Time   : 56 ms
    Memory : 4840 KB
 */


function create() {
    $strAlpha = "abcdefghjijklmnopqrstuvwxyz";
    $arrAlpha = str_split($strAlpha);

    $N = rand(2, 10);

    $fp = fopen(__DIR__ . "/wupc2012_2_gen.dat", "w+");
    fputs($fp, $N . PHP_EOL);
    for ($i = 0; $i < $N; $i++) {
        $len = rand(1, 3);
        $str = "";
        for ($j = 0; $j < $len; $j++) {
            $str .= $arrAlpha[rand(0, 25)];
        }
        fputs($fp, $str . PHP_EOL);
    }
}

$dir = __DIR__;
$path1 = "{$dir}\wupc2012_2.php";
$path2 = "{$dir}\wupc2012_2x.php";
$dat = "{$dir}\wupc2012_2_gen.dat";
$com1 = "php -f " . $path1 . " < " . $dat;
$com2 = "php -f " . $path2 . " < " . $dat;
echo $com1 . PHP_EOL;
echo $com2 . PHP_EOL;
for ($i = 0; $i < 1000000; $i++) {
    create();
    $r1 = exec($com1);
    $r2 = exec($com2);
    // $r2 = exec($com2);
    echo $r1 . " " . $r2 . PHP_EOL;
    if ($r1 != $r2) exit;
    // echo $r2 . PHP_EOL;
    // echo PHP_EOL;
}
