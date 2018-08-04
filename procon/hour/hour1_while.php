<?php
    $a = array(1, 23, 456, 7890);

    $ans = 0;

    $cnt = count($a);

    while($a) {
        $ans += array_pop($a);
    }

    echo $ans . PHP_EOL;
