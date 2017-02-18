<?php
/*
    Problem URL : http://abc054.contest.atcoder.jp/tasks/abc054_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $N, $M);

for ($i = 0; $i < $N; $i++) {
    $mapN[$i] = str_split(trim(fgets(STDIN)));
}
for ($i = 0; $i < $M; $i++) {
    $mapM[$i] = str_split(trim(fgets(STDIN)));
}

for ($x = 0; $x <= $N - $M; $x++) {
    for ($y = 0; $y <= $N - $M; $y++) {
        // echo ("\$x = $x : \$y = $y\n");
        $bool = true;
        for ($i = 0; $i < $M; $i++) {
            for ($j = 0; $j < $M; $j++) {
                if ($mapM[$i][$j] != $mapN[$x+$i][$y+$j]) {
                    $bool = false;
                }
            }
        }
        if ($bool == true) {
            echo "Yes\n";
            exit;
        }
    }
}

echo "No\n";
