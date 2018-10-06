<?php
fscanf(STDIN, "%d", $N);

if ($N == 1) {
	echo "Hello World";
}
if ($N == 2) {
	fscanf(STDIN, "%d", $A);
	fscanf(STDIN, "%d", $B);
	echo $A + $B;
}
