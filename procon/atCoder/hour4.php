<?php

    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));

    var_dump($a);

    usort($a, "cmp");

    foreach ($a as $key => $value) {
        echo $value;
        // echo "$key: $value\n";
        // echo $N - strlen($value) + 1 . PHP_EOL;
    }
    echo PHP_EOL;

    function cmp($a, $b)
    {
        if ($a == $b) {
            return 0;
        }

        $ab = $a . $b;
        $ba = $b . $a;
        return ($ab > $ba) ? -1 : 1;
    }
