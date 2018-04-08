<?php

$litter1 = 99999995;
$litter2 = 99999997;
$question = 999999999;

// 1リッターが2つの方が高くつく場合
if ($litter1 * 2 > $litter2) {
    // 問題が偶数の場合
    if ($question % 2 == 0) {
        printf("%d\n", $question / 2 * $litter2);
    } else {
        printf("%d\n", ifloor($question / 2) * $litter2 + $litter1);
    }
} else {
    printf("%d\n", $question * $litter1);
}

function ifloor($value) {
    return intval($value);
}