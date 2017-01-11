<?php
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $c);
$a = array();
foreach (range(1, 4) as $x) $a[$x] = substr_count($c, $x);
echo max($a), " ", min($a), "\n";
