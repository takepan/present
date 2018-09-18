<?php
fscanf(STDIN, "%d %d", $N, $x);
$a = explode(" ", trim(fgets(STDIN)));

sort($a);
// var_dump($a);

$ans = 0;

foreach ($a as $key => $v) {
    if ($key == $N - 1) {
        if ($v == $x) {
            $ans++;
        }
    } else {
        if ($v > $x) {
            break;
        } else {
            $x -= $v;
            // echo $x . PHP_EOL;
            $ans++;
        }
    }
}

echo $ans;

