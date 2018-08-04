<?php
    fscanf(STDIN, "%d %d", $A, $B);
    $arrA = explode(" ", trim(fgets(STDIN)));
    $arrB = explode(" ", trim(fgets(STDIN)));

    if (array_sum($arrA) == 0) exit("Yes\n");

    for ($i = 0; $i < $A; $i++) {
        if ($arrA[$i] == "0") {
            if ($i != 0 && $arrA[$i-1] == "0") exit("Yes\n");
            foreach ($arrB as $x) {
                if ($i != 0) {
                    if ($arrA[$i-1] < $x || $arrA[$i-1] == "0") {

                    } else {
                        exit("Yes\n");
                    }
                }
                if ($i != $A - 1) {
                    if ($x < $arrA[$i+1] || $arrA[$i+1] == "0") {

                    } else {
                        exit("Yes\n");
                    }
                }
            }

        } else {
            if ($i != 0) {
                if ($arrA[$i-1] < $arrA[$i]) {

                } else {
                    exit("Yes\n");
                }
            } else {

            }
        }
    }
    echo "No\n";
