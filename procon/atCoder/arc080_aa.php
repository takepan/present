<?php

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$n1 = 0;
$n2 = 0;
$n4 = 0;

foreach ($a as $v) {
    if ($v % 4 == 0) {
        $n4++;
    } else if ($v % 2 == 0) {
        $n2++;
    } else {
        $n1++;
    }
}

// echo "\$n4 : {$n4}\n";
// echo "\$n2 : {$n2}\n";
// echo "\$n1 : {$n1}\n";

if ($n2 == 0 && $n4 >= ($n1 - 1)) {
    echo "Yes\n";
} else if ($n2 != 0 && $n4 >= $n1) {
    echo "Yes\n";
} else {
    echo "No\n";
}
