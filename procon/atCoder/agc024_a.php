<?php

define('DEBUG', true);
// define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d", $A, $B, $C, $K);
// $sum = $A + $B + $C;

// for ($i = 0; $i < $K; $i++) {
// 	$sum *= 2;
// 	if (pow(10, 18) < $sum) {
// 		echo "Unfair";
// 		exit;
// 	}
// }

if ($K % 2 == 0) {
	echo $A - $B;
} else {
	echo $B - $A;
}
