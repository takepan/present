<?php

// define('DEBUG', true);
define('DEBUG', false);

define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $S1);
fscanf(STDIN, "%s", $S2);

$arS1 = str_split($S1);
$arS2 = str_split($S2);
$ans = 1;

for ($i = 0; $i < $N; $i++) {
    if ($arS1[$i] != $arS2[$i]) {
        $type = "y";
        $i++;
        if ($prev == "") {
            $ans *= 6;
        } else if ($prev == "y") {
            $ans *= 3;
        } else if ($prev == "t") {
            $ans *= 2;
        }
    } else {
        $type = "t";
        if ($prev == "") {
            $ans *= 3;
        } else if ($prev == "y") {
            $ans *= 1;
        } else if ($prev == "t") {
            $ans *= 2;
        }
    }
    $prev = $type;
    $ans %= MOD;
}

echo $ans . PHP_EOL;
