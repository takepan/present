<?php
	fscanf(STDIN, "%d", $N);
	fscanf(STDIN, "%s", $S);

	$l = substr_count($S, '<');
	$r = substr_count($S, '>');

	echo abs($l - $r);
