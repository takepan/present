<?php
fscanf(STDIN, "%d", $n);
$a = explode(" ", trim(fgets(STDIN)));
$s = array_sum($a);
$arr = array_fill(0, $n, 0);
$count = 0;
if ($s % $n != 0) {
    echo "-1\n";
} else {
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] > 0) {
            $a[$i] += $arr[$i];
        }
        if ($a[$i] != ($s / $n)) {
            echo "C\n";
            while ($a[$i] < ($s / $n)) {
                echo "D\n";
                $j = $i + 1;
                $x = 0;
                while ($x == 0) {
                    if ($a[$j] > 0) {
                        echo "B\n";
                        $a[$i] += $a[$j];
                        $a[$j] = 0;
                        echo "LIST:" . implode(" ", $a)  . " sum : " . array_sum($a) . "\n";
                        $x++;
                    }
                    $j++;
                    echo "A {$x}\n";
                }
            }
            $arr[$i + 1] = $a[$i] - $s / $n;
            $count++;
            echo "{$i} {$count}\n";
        }
    }
    echo $count."\n";
}
