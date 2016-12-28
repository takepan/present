<?php
    fscanf (STDIN, "%d %d", $vl, $vr);
    fscanf (STDIN, "%d", $d);
    fscanf (STDIN, "%d", $w);

    echo ($d / ($vl + $vr) * $w) . PHP_EOL;
