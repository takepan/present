<?php
    fscanf(STDIN, "%d", $n);
    $a = explode(" ", trim(fgets(STDIN)));
    $a_sum = array_sum($a);

    $p_sum = 0;
    for ($i = 0; $i < count($a); $i++) {
        $p_sum += $a[$i];
        if ($p_sum != 0 && $a_sum - $p_sum != 0) {
            echo "YES\n";
            echo "2\n";
            echo "1 " . ($i + 1) . "\n";
            echo ($i + 2) . " " . $n;
            exit;
        }
    }
    echo "NO";
