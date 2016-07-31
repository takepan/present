<?php
/*
    Problem URL : http://arc056.contest.atcoder.jp/tasks/arc056_a

    Score  :
    Result :
    Time   :  ms
    Memory :  KB
 */

fscanf(STDIN, "%d %d %d %d", $A, $B, $K, $L);

// K個のみかんを買うことが決まりました。 みかんは1個A円、さらにL個のセットでB円

$need_sets = ceil($K / $L);
$need_money = $B * $need_sets;

if ($L * $need_sets == $K) {
    echo $need_money . PHP_EOL;
} else {
    echo min($need_money, ($need_sets - 1) * $B + ($K - ($need_sets - 1) * $L) * $A) . PHP_EOL;
}
