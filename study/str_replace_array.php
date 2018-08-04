<?php
    $a = array("3C","4S", "77");
    $b = str_replace('4S', '4Q', $a);
    var_dump($b);

    $count &= 0;
    $a = array("A","AA", "AAA", "AAAA");
    $b = str_replace('AA', 'VV', $a, $count);
    var_dump($b);
    echo "count=" . $count . "\n";

    $count &= 0;
    $a = array("A","AA", "AAA", "AAAA");
    $b = str_replace('A', 'WWW', $a, $count);
    var_dump($b);
    echo "count=" . $count . "\n";

    $count &= 0;
    $a = array("A","AA", "AAA", "AAAA");
    $b = str_replace('A', 'WWW', $a, $count);
    var_dump($b);
    echo "count=" . $count . "\n";
