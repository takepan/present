<?php
    fscanf (STDIN, "%d %d %d %d", $a, $b, $c, $d);

    $ans = ($a * $b) % $d;
    $ans = ($ans * $c) % $d;

    echo $ans . PHP_EOL;