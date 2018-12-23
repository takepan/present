<?php
// 0 => P                     P1         B0         T01
// 1 => B [P] P [P] B         P3 2倍して+1 B2 2倍して+2 T05 2倍して+3
// 2 => B [BPPPB] P [BPPPB] B P7 2倍して+1 B6 2倍して+2 T13 2倍して+3

fscanf(STDIN, "%d %d", $N, $X);

$L = [1 => 1];
for ($i = 2; $i <= 50; $i++) {
    $L[$i] = $L[$i-1] * 2 + 3;
}
// 1 =>  1
// 2 =>  5
// 3 => 13
// var_dump($L);

printf("%d", solve($N, $X));

function solve($N, $X) {
    global $ret, $L;

    if ($X === 1) {
        if ($N === 0) {
            $ret++;
        }
        return $ret;
    } elseif($X === $L[$N] + 2) {
        $ret += ceil($L[$N] / 2) + 1;
    } elseif($X === $L[$N] * 2 + 3) {
        $ret += ceil($L[$N] / 2) * 2 + 1;
    } elseif($X > 1 && $X < $L[$N] + 2) {
        solve($N - 1, $X - 1);
    } elseif($X > $L[$N] + 2 && $X < $L[$N] * 2 + 3) {
        $ret += ceil($L[$N] / 2) + 1;
        solve($N - 1, $X - 2 - $L[$N]);
    } else {
        exit("ERR {$N} {$X}\n");
    }

    return $ret;
}