<?php
    fscanf (STDIN, "%d %d", $Px, $Py);
    fscanf (STDIN, "%d %d", $Qx, $Qy);

    echo (abs($Px-$Qx) + abs($Py-$Qy)) / 2 . PHP_EOL;
