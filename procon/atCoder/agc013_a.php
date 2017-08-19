<?php
/*
    Problem URL : http://agc013.contest.atcoder.jp/tasks/agc013_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */


define('DEBUG', true);
// define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$A = explode(" ", trim(fgets(STDIN)));

var_dump($A);

$ans = 0;

for ($i = 0; $i < $N - 1; $i++) {
    if (DEBUG) echo "* {$A[$i]} {$A[$i+1]}\n"; 
    if ($A[$i+1] == $A[$i]) {
        $flg = 0;
        echo "B";
    } elseif ($A[$i+1] > $A[$i]) {
        $flg = 1;
        echo "C";
    } else {
        $flg = -1;
        echo "A";
    }

    if ($flg != 0) {
        if (!isset($prev)) {
            $prev = $flg;
            $ans++;
        } else {
            if ($flg != $prev) {
                $ans++;
                unset($prev);
            }            
            if (DEBUG) echo "{$prev} flg:{$flg} ans:{$ans} " . PHP_EOL;
        }
    }
}

echo $ans . PHP_EOL;
