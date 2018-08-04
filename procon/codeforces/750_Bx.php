<?php
    fscanf(STDIN, "%d", $n);

    $pos = 0;

    for ($i = 0; $i < $n; $i++) {
        fscanf(STDIN, "%d %s", $d, $dir);


        // 北極にいる
        if ($pos % 40000 == 0) {
            if ($dir != "South") {
                exit('NO');
            }
        }

        // 南極にいる
        if ($pos % 40000 == 20000) {
            if ($dir != "North") {
                exit('NO');
            }
        }

        switch ($dir) {
            case "South":
                $pos += $d;
                break;

            case "North":
                $pos -= $d;
                break;
        }

        // echo "{$d} {$dir} {$pos}\n";
    }

    if ($pos % 40000 == 0) {
        echo "YES";
    } else {
        echo "NO";
    }