<?php

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    for ($i = 0; $i < 3; $i++) {
        fscanf(STDIN, "%d", $a);
        $total += $a;
    }

    echo $total . PHP_EOL;