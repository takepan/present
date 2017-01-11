<?php
    fscanf(STDIN, "%d", $N);
    fscanf(STDIN, "%s", $S);

    $intSL = strpos($S, ">");
    $intSR = strpos($S, "<");
    $intEL = strrpos($S, "<");
    $intER = strrpos($S, ">");

    // var_dump($intSL);
    // var_dump($intSR);
    // var_dump($intEL);
    // var_dump($intER);

    $ans = 0;
    if ($intSL === false || $intSR === false || $intEL === false || $intER === false) {
        $ans = $N;
    } else {
        if ($intSR < $intSL) {
            $ans += $intSL;
        }

        if ($intER > $intEL) {
            $ans += $N - $intEL - 1;
        }
    }

    echo $ans;

