<?php
/*
    Problem URL : http://abc032.contest.atcoder.jp/tasks/abc032_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $NN, $WW);
for ($i = 0; $i < $NN; $i++) {
    fscanf(STDIN, "%d %d", $v[$i], $w[$i]);
}

// 何番目の商品まで選び終わったかと、その時点での容量の余り
function solve($index, $rest) {
    global $w, $NN, $memo;
    echo "{$index} {$rest}\n";

    if ($index == $NN) return;
    if ($rest >= $w[$index]) {
        return max(solve($index+1, $rest - $w[$index]), solve($index+1, $rest));
    } else {
        return solve($index+1, $rest);
    }
}

$memo = array();
echo solve(0, $WW) . PHP_EOL;
