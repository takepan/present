<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    $arr[$a[$i]]++;
}

foreach ($arr as $key => $val) {
    $x = $arr[$key] + $arr[$key+1] + $arr[$key+2];
    $ans = max($ans, $x);
}

echo $ans . PHP_EOL;
