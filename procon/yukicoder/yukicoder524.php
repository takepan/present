<?php
    fscanf (STDIN, "%d", $N);
    if ($N % 4 == 0) {
        echo "O\n";
    } else {
        echo "X\n";
    }