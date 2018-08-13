<?php
fscanf(STDIN, "%d %d", $N, $K);
// $a = explode(" ", trim(fgets(STDIN)));

echo ($N % $K === 0) ? 0 : 1;
