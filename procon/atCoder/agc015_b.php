<?php

fscanf(STDIN, "%s", $S);

$a = str_split($S);
$cnt = count($a);

$ans = 0;

for ($i = 0; $i < $cnt; $i++) {
    switch ($a[$i]) {
        case "U":
            $tmpU = ($cnt - $i - 1);
            // printf("U %d upto %d\n", $i + 1, $tmpU);
            $tmpD = $i * 2;
            // printf("U %d downto %d\n", $i + 1, $tmpD);
            $ans += ($tmpU + $tmpD);
            break;

        case "D":
            $tmpU = $i;
            // printf("D %d upto %d\n", $i + 1, $tmpU);
            $tmpD = ($cnt - $i - 1) * 2;
            // printf("D %d downto %d\n", $i + 1, $tmpD);
            $ans += ($tmpU + $tmpD);
            break;
    }
}

echo $ans . PHP_EOL;
