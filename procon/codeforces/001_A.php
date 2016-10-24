<?php
    fscanf(STDIN, "%d %d %d", $n, $m, $a);

    echo bcmul(ceil($n / $a), ceil($m / $a));
