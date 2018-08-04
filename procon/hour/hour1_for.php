<?php
    $a = array(1, 23, 456, 7890);

    $ans = 0;

    $cnt = count($a);

    for ($i = 0; $i < $cnt; $i++) {
        $ans += $a[$i];
    }

    echo $ans . PHP_EOL;
