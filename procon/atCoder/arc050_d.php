<?php

    fscanf(STDIN, "%d", $N);
    fscanf(STDIN, "%s", $S);

    $a = array();

    for ($i = 1; $i <= $N; $i++) {
        $a[$i] = substr($S, $i - 1);
    }

    // var_dump($a);

    usort($a, "cmp");

    foreach ($a as $key => $value) {
        // echo "$key: $value\n";
        echo $N - strlen($value) + 1 . PHP_EOL;
    }

    function cmp($a, $b)
    {
        // if ($a == $b) {
        //     return 0;
        // }

        $ab = $a . $b;
        $ba = $b . $a;
        // echo "{$ab} {$ba}\n";
        return strcmp($ab, $ba);
    }
