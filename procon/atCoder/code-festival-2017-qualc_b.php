<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);
$A = explode(" ", trim(fgets(STDIN)));

$x = 1;
foreach ($A as $aa) {
    if ($aa % 2 == 0) {
        $x *= 2;
    }
}

echo pow(3, $N) - $x;
echo PHP_EOL;