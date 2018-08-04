<?php
    fscanf(STDIN, "%d", $L);
    fscanf(STDIN, "%s", $S);

    echo substr($S, 0, $L) . PHP_EOL;
