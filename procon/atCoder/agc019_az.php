<?php
// exit("A : " . PHP_INT_MAX);

$a = 999999999 / 2;
$b = floor($a);
printf("%d\n", $b);
echo "raw b : " . $b . PHP_EOL;
echo "\$b : " . gettype($b) . PHP_EOL;
$c = $b * 99999997;
printf("%d\n", $c);
$d = $c + 99999995;
printf("%d\n", $d);
exit('O');

// 99999989 99999993 99999995 99999997
// 999999999

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d", $Q, $H, $S, $D);
fscanf(STDIN, "%d", $N);

$lit1 = min($Q * 4, $H * 2, $S);

echo $lit1 . PHP_EOL;
echo ($D / 2) . PHP_EOL;

if ($lit1 < $D / 2) {
    // $lit1ベースで買った方が安い
    ans($N * $lit1);

} else {
    if ($N % 2 == 0) {
        ans($N / 2 * $D);
    } else {
        ans(($N - 1) / 2 * $D + $lit1);
        exit("$N $D $lit1\n");
    }
}

function ans($ans) {
    printf("%d\n", $ans);
}