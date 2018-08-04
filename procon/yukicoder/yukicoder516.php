<?php

    $cntR = 0;

    for ($i = 0; $i < 3; $i++) {
        fscanf (STDIN, "%s", $S);
        if ($S === "RED") {
            $cntR++;
        }
    }

    echo ($cntR >= 2) ? "RED\n" : "BLUE\n";
