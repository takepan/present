<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $n);
$a = explode(" ", trim(fgets(STDIN)));

echo array_sum($a) > 0 ? "HARD" : "EASY";
