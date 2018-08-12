<?php
fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

echo array_sum($a) - $N . PHP_EOL;
