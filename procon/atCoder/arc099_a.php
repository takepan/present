<?php
fscanf(STDIN, "%d %d", $N, $K);
$dummy = explode(" ", trim(fgets(STDIN)));

echo ceil(($N - $K) / ($K - 1)) + 1;