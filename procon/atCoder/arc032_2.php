<?php
    /*
        Problem URL : http://arc032.contest.atcoder.jp/tasks/arc032_2

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    // define(DEBUG, true);
    define('DEBUG', false);

    $answer = -1;
    $arr = array();
    $arr2 = array();
    $arr3 = array();

    $fp = fopen('php://stdin', 'r+');
    list($N, $M) = explode(' ', trim(fgets($fp)));
    for ($i = 0; $i < $N; $i++) {
        $arr[$i+1] = $i + 1;
        $arr3[$i+1] = array($i + 1);
    }

    for ($i = 0; $i < $M; $i++) {
        list($a, $b) = explode(' ', trim(fgets($fp)));
        $k = sprintf("%06d-%06d", $a, $b);
        $arr2[] = $k;
    }

    // sort($arr2);
    if (DEBUG) var_dump($arr2);

    foreach ($arr2 as $k) {
        list($x, $y) = explode("-", $k);
        $x  = (int) $x;
        $y  = (int) $y;
        if (DEBUG) echo "{$x}-{$y}\n";
        $m = min($arr[$x], $arr[$y]);
        if ($arr[$x] != $m) {
            if (DEBUG) echo "AAA\n";
            $tmpArr = array();
            foreach ($arr3[$arr[$x]] as $k => $v) {
                $arr[$v] = $m;
                if (count($arr3[$v])>0) {
                    $tmpArr = $arr3[$v];
                    $tmpNum = $v;
                }
            }
            $arr3[$arr[$y]] = array_merge($arr3[$arr[$y]], $tmpArr);
            $arr3[$tmpNum] = array();
        } elseif ($arr[$y] != $m) {
            if (DEBUG) echo "BBB\n";
            $tmpArr = array();
            foreach ($arr3[$arr[$y]] as $k => $v) {
                if (DEBUG) echo "loop2 : \$v = $v\n";
                if (DEBUG) var_dump($arr3[$v]);
                $arr[$v] = $m;
                if (count($arr3[$v])>0) {
                    $tmpArr = $arr3[$v];
                    $tmpNum = $v;
                }
            }
            if (DEBUG) echo "tmpArr=\n";
            if (DEBUG) var_dump($tmpArr);
            $arr3[$arr[$x]] = array_merge($arr3[$arr[$x]], $tmpArr);
            $arr3[$tmpNum] = array();
        } else {
            if (DEBUG) echo "CCC\n";


        }
        // $arr[$x] = $m;
        // $arr[$y] = $m;
        // var_dump($arr);
        if (DEBUG) {
            foreach ($arr3 as $k => $v) {
                echo "{$k} -> {$arr[$k]}\t\t\t";
                if (is_array($v)) {
                    echo "{$k} : " . implode(",", $v) . PHP_EOL;
                }
            }
            echo PHP_EOL;
        }
    }

    foreach ($arr3 as $k => $v) {
        if (count($v) > 0) $answer++;
    }

    echo $answer . PHP_EOL;
