<?php
fscanf(STDIN, "%d", $K);

$even = floor($K / 2);
$odd = $K - $even;

// echo "even:{$even} odd:{$odd}\n";

echo $even * $odd;
