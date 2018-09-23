<?php
fscanf(STDIN, "%d", $A);
fscanf(STDIN, "%d", $B);
fscanf(STDIN, "%d", $C);
fscanf(STDIN, "%d", $S);

$diff = $S - $A - $B - $C;

if ($diff >= 0 && $diff <= 3) {
    echo "Yes";
} else {
    echo "No";
}
