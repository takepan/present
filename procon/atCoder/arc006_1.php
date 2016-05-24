<?php
/*
    Problem URL : http://arc006.contest.atcoder.jp/tasks/arc006_1

    Score  : 100
    Result : AC
    Time   : 62 ms
    Memory : 4572 KB
 */

$E = explode(" ", trim(fgets(STDIN)));
fscanf(STDIN, "%s", $B);
$L = explode(" ", trim(fgets(STDIN)));

$ans = 0;
$hit = 0;

$lenL = count($L);

for ($i = 0; $i < $lenL; $i++) {
    if (in_array($L[$i], $E)) {
        $hit++;
    }
}

// echo "$hit\n";

if ($hit == 6) {
    $ans = 1;
} elseif ($hit == 5) {
    if (in_array($B, $L)) {
        $ans = 2;
    } else {
        $ans = 3;
    }
} else {
    if ($hit < 3) {
        $ans = 0;
    } else {
        $ans = 8 - $hit;
    }
}

echo $ans . PHP_EOL;
