<?php
/*
    Problem URL : http://arc069.contest.atcoder.jp/tasks/arc069_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $s);

$count_o = substr_count($s, "o");
$count_x = substr_count($s, "x");

if ($count_o == 1 || $count_x == 1) {
    echo "-1\n";
    exit;
}

$s = str_replace("x", "S", $s);
$s = str_replace("o", "W", $s);

echo "answer: ";
echo $s . PHP_EOL;

// $s = "SSSWWS";

// 検算
$ss = $s[$N-1];
$ss .= $s;

echo "ss: " . $ss . PHP_EOL;


for ($i = 0; $i < $N; $i++) {
    if ($ss[$i] == $ss[$i+2]) {
        if ($ss[$i+1] == "S") {
            echo "o";
        } else {
            echo "x";
        }
    } else {
        if ($ss[$i+1] == "S") {
            echo "x";
        } else {
            echo "o";
        }

    }
}
echo PHP_EOL;
