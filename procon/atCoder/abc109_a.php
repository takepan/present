<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $A, $B);

if (($A * $B) % 2 === 0) {
	echo "No";
} else {
	echo "Yes";
}
