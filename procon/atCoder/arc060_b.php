<?php
/*
    Problem URL : http://arc060.contest.atcoder.jp/tasks/arc060_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// fscanf(STDIN, "%d", $n);
// fscanf(STDIN, "%d", $s);

$n = 65535;

// var_dump(q($n, 2));

for ($i = 2; $i <= $n; $i++) {
    //echo $i . " " . q($n, $i) . PHP_EOL;
    q($n, $i);
}

function q($a, $b) {
    $arr = array();
    $bool = true;
    while ($bool) {
        $m = $a % $b;
        $n = ($a - $m) / $b;
        $arr[] = $m;
        if ($a < $b) {
            // $arr[] = $a;
            $bool = false;
        }
        $a = $n;
    }
    // return $arr;
    echo $b . " ";
    echo implode(" ", $arr) . " ";
    echo array_sum($arr) . PHP_EOL;
    return array_sum($arr);

}

