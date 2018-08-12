<?php
fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

foreach ($a as $k => $v) {
    $a[$k] = $v - ($v % 2 == 0);
}

echo implode(" ", $a);
