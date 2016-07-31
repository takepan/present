<?php
/*
    Problem URL : http://agc002.contest.atcoder.jp/tasks/agc002_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// N L
// a1 a2 … aN


fscanf(STDIN, "%d %d", $N, $L);
$a = explode(" ", trim(fgets(STDIN)));

$b = array();

for ($i = 0; $i < $N - 1; $i++) {
    $b[$i] = $a[$i] + $a[$i+1];
}
arsort($b);

if (max($b) >= $L) {
    echo "Possible\n";
} else {
    exit("Impossible\n");
}

// var_dump($arr);
// exit;

// var_dump($b);

asort($b);
// var_dump($b);

foreach ($b as $k => $v) {
    echo $k + 1 . PHP_EOL;
}

