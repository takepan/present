<?php
/*
    http://agc005.contest.atcoder.jp/tasks/agc005_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('memory_limit', -1);

// define('DEBUG', true);
define('DEBUG', false);

// test
// $N = 10;
// $a = array(3, 9, 7, 1, 10, 8, 5, 2, 4, 6);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$a_address = array_flip($a);
$mmap = array();
$area = 0;
$ans = 0;
// var_dump($a_address);

for ($i = $N; $i > 0; $i--) {
    $pos = $a_address[$i];
    // echo "{$i} {$a_address[$i]}\n";
    $l = array_search($pos - 1, $mmap);
    $r = isset($mmap[$pos+1]);
    if ($l === false) {
        if ($r === false) {
            // 左も右もない
            $lw = 1;
            $rw = 1;
            $mmap[$pos] = $pos;
        } else {
            $lw = 1;
            $rw = $mmap[$pos+1] - $pos + 1;
            $mmap[$pos] = $mmap[$pos+1];
            unset($mmap[$pos+1]);
        }
    } else {
        if ($r === false) {
            $lw = $pos - $l + 1;
            $rw = 1;
            $mmap[$l] = $pos;
        } else {
            $lw = $pos - $l + 1;
            $rw = $mmap[$pos+1] - $pos + 1;
            $mmap[$l] = $mmap[$pos+1];
            unset($mmap[$pos+1]);
        }
    }
    // ksort($mmap);
    // $arrTmp = array();
    // foreach ($mmap as $key => $val) {
    //     $arrTmp[] = "{$key}->{$val}";
    // }
    // $area += $lw * $rw;
    $ans += $lw * $rw * $i;
    // printf("N:%d lw:%d rw:%d map:%s\n", $i, $lw, $rw, implode(" ", $arrTmp));
}

// echo "area={$area}\n";
echo $ans . PHP_EOL;
