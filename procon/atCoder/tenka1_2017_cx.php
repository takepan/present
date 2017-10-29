<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);

$target = 4 / $N;
$start = ceil($N / 4);

for ($i = $start; $i <= 3500; $i++) {
    $copy = $target;
    $copy -= 1 / $i;
    if ($copy == 0) continue;
    if (DEBUG) echo "i:{$i}\n";
    $start2 = ceil(1 / $copy);

    if (DEBUG) echo $copy . "-" . $start2 . PHP_EOL;
    for ($j = $start2; $j <= 3500; $j++) {
        $copy2 = $copy - 1 / $j;
        if ($copy2 == 0) continue;
        $num3 = 1 / $copy2;
        if (DEBUG) echo "i:{$i} j:{$j} test2: {$copy2}\n";
        if ((int) $num3 == $num3) {
            printf("%d %d %d\n", $i, $j, $num3);
            if (DEBUG) printf("4 / %d = 1 / %d + 1 / %d + 1 / %d\n", $N, $i, $j, $num3);
            if (DEBUG) printf("%.9f %.9f\n", 4 / $N, 1 / $i + 1 / $j + 1/ $num3);
            exit;
        }
    }
}
