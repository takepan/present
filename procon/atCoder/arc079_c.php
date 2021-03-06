<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

// solve(array(15,1,3,25, 45), 42);
// exit;


$arr = array();

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

// $sum = array_sum($a);
// echo $sum - (($N - 1) * $N) / ($N - 1) . PHP_EOL;
// exit;

$cnt = 0;
while (true) {
    echo implode(" ", $a) . PHP_EOL;
    if (max($a) < $N) {
        echo $cnt . PHP_EOL;
        exit;
    }
    $mmax = max($a);
    $mmin = min($a);
    $maxloc = array_search($mmax, $a);

    $reg = $a[$maxloc];
    // $a[$maxloc] = PHP_INT_MAX;

    $minloc = array_search($mmin, $a);

    $a[$maxloc] = $reg;

    // echo "maxloc:{$maxloc} minloc:{$minloc}\n";
    $reduce_cnt = ceil(($mmax - $N + 1) / $N);
    // echo "reduce_cnt: $reduce_cnt\n";
    $maxtmp = $a[$maxloc];
    // echo "{$maxtmp} -> {$a[$maxloc]}\n";
    // $a[$minloc] += $reduce_cnt;


    $total1 = array_sum($a);
    $a = solve($a, $reduce_cnt);
    $a[$N - 1] -= $reduce_cnt * $N;
    $total2 = array_sum($a);
    echo "**************" . ($total2 - $total1) . "?" . $num . PHP_EOL;

    $cnt += $reduce_cnt;

    if (DEBUG) {
        echo "\n";
        echo implode(" ", $a) . PHP_EOL;
        echo "cnt: $cnt\n";
        echo "\n";
    }

    // sleep(1);
}


function solve($arr, $num) {
    $cnt = count($arr);
    $total1 = array_sum($arr);

    sort($arr);

    $avoid = $arr[$cnt-1];
    $arr[$cnt-1] = PHP_INT_MAX;

    if (DEBUG) var_dump($arr);
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
        $need = ($i + 1) * $arr[$i+1] - $sum;
        echo "i:{$i} need:{$need}\n";
        if ($need > $num) break;
    }
    if (DEBUG) echo "sum:{$sum} answer:{$i}\n";
    $ans = $i;
    $goukei = $sum + $num;
    // echo "goukei: " . $goukei . PHP_EOL;
    for ($i = 0; $i <= $ans; $i++) {
        $plus = ($goukei % ($ans + 1) > ($i));
        $arr[$i] = floor(($sum + $num) / ($ans + 1)) + $plus;
        // echo ($aaa + $plus)  . PHP_EOL;
    }

    $arr[$cnt-1] = $avoid;
    // echo "\n====\n";
    // echo implode(" ", $arr) . PHP_EOL;
    // echo "\n====\n";
    // sleep(1);
    $total2 = array_sum($arr);

    echo "**************" . ($total2 - $total1) . " num:" . $num . PHP_EOL;

    return $arr;
}