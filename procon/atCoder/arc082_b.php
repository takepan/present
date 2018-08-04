<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$kai = 0;
$prev = false;

for ($i = 0; $i < $N; $i++) {
    if ($i + 1 == $a[$i]) {
    	$b[$i] = 1;
    } else {
    	$b[$i] = 0;
    }
}

// echo implode(" ", $b) . PHP_EOL;

for ($i = 0; $i < $N; $i++) {
	switch ($b[$i]) {
		case 1:
			if ($b[$i+1] == 0 || $b[$i+1] == 1 || $i + 1 == $N) {
				$kai++;
				$i++;
			}
		case 0:
			break;
	}
}

echo $kai . PHP_EOL;
