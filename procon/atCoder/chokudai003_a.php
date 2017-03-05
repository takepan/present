<?php
/*
    Problem URL : http://chokudai003.contest.atcoder.jp/tasks/chokudai003_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

$N = 50;

$sum = array();
$cnt_plus = 0;
$cnt_minus = 0;

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s", $s[$i]);
}

for ($i = 0; $i < $N; $i++) {
    while($cnt_plus < 21) {
        $x = rand(0, 49);
        $y = rand(0, 49);
        if ($s[$x][$y] == ".") {
            $s[$x][$y] = "+";
            $cnt_plus++;
        }
    }
    while($cnt_minus < 6) {
        $x = rand(0, 49);
        $y = rand(0, 49);
        if ($s[$x][$y] == ".") {
            $s[$x][$y] = "-";
            $cnt_minus++;
        }
    }
}

for ($i = 0; $i < $N; $i++) {
    echo $s[$i] . PHP_EOL;
}
