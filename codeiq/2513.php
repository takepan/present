<?php
    fscanf(STDIN, "%d", $N);
    $A = explode(" ", trim(fgets(STDIN)));
    echo solve($A) === true ? "yes" : "no";

    function solve($A) {
        $cntA = count($A);

        for ($i = 0; $i < $cntA - 1; $i++) {
            for ($j = $i + 1; $j < $cntA; $j++) {
                if ($A[$i] + $A[$j] == 256) {
                    return true;
                }
            }
        }
        return false;
    }
