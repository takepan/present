<?php
    fscanf (STDIN, "%d %d", $X, $Y);
    fscanf (STDIN, "%d", $N);
    $A = explode(" ", trim(fgets(STDIN)));
    for ($i = 0; $i < $N - 1; $i++) {
        // printf("%f %f\n", $A[$i] / $X * $Y , $A[$i+1]);
        if ($A[$i] * $Y > $A[$i+1] * $X) {
            echo "NO\n";
            exit;
        }
    }

    echo "YES\n";