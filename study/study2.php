<?php
    $ans = 0;
    while(!feof()) {
        $a = trim(fgets(STDIN));
        if (is_numeric($a)) {
            $ans += $a;
        }
    }
    echo $ans . PHP_EOL;
