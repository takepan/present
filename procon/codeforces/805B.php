<?php
    fscanf(STDIN, "%d", $a);
    $b = ceil($a / 5);
    $c = str_repeat("aabbc", $b);
    echo substr($c, 0, $a) . PHP_EOL;
