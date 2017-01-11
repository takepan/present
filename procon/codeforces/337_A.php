<?php
    fscanf(STDIN, "%d %d", $m, $n);
    // echo "{$m} {$n}\n";
    $f = explode(" ", trim(fgets(STDIN)));

    sort($f);
    // var_dump($f);
    $ans = PHP_INT_MAX;
    for ($i = 0; $i < $n - $m + 1; $i++) {
        $ans = min($ans, $f[$m + $i - 1] - $f[$i]);
        // echo "{$i} {$ans}" . PHP_EOL;
    }

    echo $ans;
