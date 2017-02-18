<?php
/*
    Problem URL : http://abc054.contest.atcoder.jp/tasks/abc054_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

$ans = PHP_INT_MAX;

fscanf(STDIN, "%d %d %d", $N, $Ma, $Mb);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d %d", $data[$i]['a'], $data[$i]['b'], $data[$i]['c']);
    $tmpA = $data[$i]['a'] / $Ma;
    $tmpB = $data[$i]['b'] / $Mb;
    if ($tmpA != $tmpB) continue;
    if ($tmpA != floor($tmpA)) continue;
    if ($tmpB != floor($tmpB)) continue;
    $ans = min($ans, $data[$i]['c']);
}

for ($i = 0; $i < $N-1; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $tmpA = ($data[$i]['a'] + $data[$j]['a']) / $Ma;
        $tmpB = ($data[$i]['b'] + $data[$j]['b']) / $Mb;
        if ($tmpA != $tmpB) continue;
        if ($tmpA != floor($tmpA)) continue;
        if ($tmpB != floor($tmpB)) continue;
        // echo "{$i} {$j}\n";
        $ans = min($ans, $data[$i]['c'] + $data[$j]['c']);
    }
}

for ($i = 0; $i < $N-2; $i++) {
    for ($j = $i + 1; $j < $N - 1; $j++) {
        for ($k = $j + 1; $k < $N; $k++) {
            $tmpA = ($data[$i]['a'] + $data[$j]['a'] + $data[$k]['a']) / $Ma;
            $tmpB = ($data[$i]['b'] + $data[$j]['b'] + $data[$k]['b']) / $Mb;
            if ($tmpA != $tmpB) continue;
            if ($tmpA != floor($tmpA)) continue;
            if ($tmpB != floor($tmpB)) continue;
            // echo "{$i} {$j}\n";
            $ans = min($ans, $data[$i]['c'] + $data[$j]['c'] + $data[$k]['c']);
        }
    }
}

for ($i = 0; $i < $N-3; $i++) {
    for ($j = $i + 1; $j < $N - 2; $j++) {
        for ($k = $j + 1; $k < $N - 1; $k++) {
            for ($l = $k + 1; $l < $N; $l++) {
                $tmpA = ($data[$i]['a'] + $data[$j]['a'] + $data[$k]['a'] + $data[$l]['a']) / $Ma;
                $tmpB = ($data[$i]['b'] + $data[$j]['b'] + $data[$k]['b'] + $data[$l]['b']) / $Mb;
                if ($tmpA != $tmpB) continue;
                if ($tmpA != floor($tmpA)) continue;
                if ($tmpB != floor($tmpB)) continue;
                // echo "{$i} {$j}\n";
                $ans = min($ans, $data[$i]['c'] + $data[$j]['c'] + $data[$k]['c'] + $data[$l]['c']);
            }
        }
    }
}

if ($ans === PHP_INT_MAX) {
    echo "-1\n";
} else {
    echo $ans . PHP_EOL;    
}
