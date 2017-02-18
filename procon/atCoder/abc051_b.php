<?php
/*
    Problem URL : http://abc051.contest.atcoder.jp/tasks/abc051_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $K, $S);

$ans = 0;

for ($x = 0; $x <= $S; $x++) {
    for ($y = $x; $x + $y <= $S; $y++) {
        $z = $S - $x - $y; 
        if ($x > $K || $y > $K || $z > $K) continue;   
        if ($z < $y) continue;    
        // echo "{$x} {$y} {$z}\n";
        $a1 = $x === $y;
        $a2 = $x === $z;
        $a3 = $y === $z;
        $aa = $a1 + $a2 + $a3;
        switch ($aa) {
            case 3:
                $ans += 1;
                break;

            case 1:
                $ans += 3;
                break;

            case 0:
                $ans += 6;
                break;
        }
        // echo "{$x} {$y} {$z} {$aa}\n";
    }
}
echo $ans . PHP_EOL;
