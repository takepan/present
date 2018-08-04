<?php

// define('DEBUG', true);
define('DEBUG', false);


fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
// var_dump($a);
$arr = array();
$sq = array();
$target = 0;

rsort($a);

for ($i = 0; $i < $N; $i++) {
    $arr[$a[$i]]++;
    if ($arr[$a[$i]] == 2) {
        $sq[$target] = $a[$i];
        $arr[$a[$i]] -= 2;
        $target++;
        if ($target >= 2) {
            echo ($sq[0] * $sq[1]) . PHP_EOL;
            exit;
        }
    }
}

echo "0\n";
