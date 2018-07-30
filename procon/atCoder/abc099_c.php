<?php
// $n = 59049;
// $base = 9;
// $l = log($n, $base);
// printf("%.20f\n", $l );
// var_dump($l);
// // $tmp = intval($l);
// $tmp = intval((string)$l);
// // $tmp = (int)$l;
// // $tmp = floor($l);
// var_dump($tmp);
// exit;

// 4.99999999999999911182
// 7.99999999999999911182


// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);

$answer = PHP_INT_MAX;

$max9 = floor($N / 9);
for ($i = $max9; $i >= 0; $i--) {
    $newN = $N;
    $newN -= 9 * $i;
    $ret9 = getLog($i * 9, 9);
    $num6 = floor($newN / 6);
    $ret6 = getLog($num6 * 6, 6);
    $newN -= 6 * $num6;
    $ret1 = $newN;
    $sum = $ret9 + $ret6 + $ret1;
    $answer = min($sum, $answer);
    if (DEBUG) printf("9:%d 6:%d 1:%d sum:%d answer:%d\n", $ret9, $ret6, $ret1, $sum, $answer);
}
echo $answer . PHP_EOL;

function getLog($n, $base) {
    if (DEBUG) echo "{$n} {$base}\n";
    $l = log($n, $base);
    // var_dump($l);
    $tmp = intval((string)$l);
    // var_dump($tmp);
    // exit;

    $ret = 0;
    for ($i = $tmp; $i >= 1; $i--) {
        $num = floor($n / pow($base, $i));
        $n -= $num * pow($base, $i);
        if (DEBUG) printf("base:%d number:%d proc:%d rest:%d\n", $base, pow($base, $i), $num, $n);
        $ret += $num;
    }
    return $ret;
}
