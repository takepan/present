<?php

/*
    Problem URL : http://arc067.contest.atcoder.jp/tasks/arc067_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
// define('DEBUG', true);
// define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d %d", $N, $A, $B, $C, $D);
echo "argv: {$N}-{$A}-{$B}-{$C}-{$D}\n";
define('MOD', pow(10, 9) + 7);

echo "solve {$D} {$N}\n";
var_dump(solve($D, $N));

function solve($i, $j)
{
    echo "call solve: {$i} {$j}\n";
    global $C, $D, $N;

    $arrTask = array(0);
    for ($i = $C; $i <= $D; $i++) {
        $arrTask[] = $i;
    }
    echo "arrTask: ";
    var_dump($arrTask);

    $ret = 0;
    foreach ($arrTask as $k) {
        echo "arrTask: {$k}\n";
        echo "solve: " . ($i - 1) . "," . ($j - $i * $k) . "\n";
        sleep(1);
        $ret += solve($i - 1, $j - $i * $k) * calcP($N - $j + $i * $k, $i * $k) / pow(factorial($i), $k) / factorial($k);
    }

    echo "\$i: {$i}   \$j: {$j}   \$ret: {$ret}\n";
    sleep(1);
    return $ret;
}

function calcP($m, $n)
{
    $ret = 1;
    for ($i = 0; $i < $n; $i++) {
        $ret *= $m - $i;
    }
    for ($i = $n; $i > 1; $i--) {
        $ret /= $i;
    }
    return $ret;
}

function factorial($k)
{
    $ret = 1;
    for ($i = 2; $i <= $k; $i++) {
        $ret *= $i;
    }
    return $ret;
}
