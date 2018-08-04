<?php

fscanf(STDIN, "%d", $A);
fscanf(STDIN, "%d", $B);
echo (7 | 8) . PHP_EOL;
echo (7 | 9) . PHP_EOL;
echo (8 | 9) . PHP_EOL;
echo (7 | 8 | 9) . PHP_EOL;
exit;
$a = array();
for ($i = $A; $i <= $B; $i++) {
    $a[] = $i;
}
var_dump($a);
foreach ($a as $k1 => $v1) {
    foreach ($a as $k2 => $v2) {
        echo $v1 | $v2 . PHP_EOL;
    }
}
