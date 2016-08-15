<?php
    $a = array(1, 2);
    $b = array("1", "2");
    $c = array("", null);

    echo "====var_export false \n";
    var_export($a, false);
    var_export($b, false);
    var_export($c, false);

    echo "====var_export true \n";
    $aa = var_export($a, true);
    $bb = var_export($b, true);
    $cc = var_export($c, true);

    echo "====var_export true 2 \n";
    echo $aa . PHP_EOL;
    echo $bb . PHP_EOL;
    echo $cc . PHP_EOL;

    echo "====var_dump \n";
    var_dump($a);
    var_dump($b);
    var_dump($c);
