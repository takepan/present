<?php
fscanf(STDIN, "%d %d %d", $A, $B, $C);
$x = array($A, $B, $C);
rsort($x);
echo $x[0] * 10 + $x[1] + $x[2];
