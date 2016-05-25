<?php
/*
    Problem URL : http://arc006.contest.atcoder.jp/tasks/arc006_2

    Score  : AC
    Result : 100
    Time   : 61 ms
    Memory : 3900 KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $N, $L);
for ($i = 0; $i < $L; $i++) {
    $x = fgets(STDIN);
    $arr = str_split($x);
    for ($j = 0; $j < $N; $j++) {
        if ($arr[$j*2+1] == '-') {
            $arrAmida[$i][$j] = 1;
        }
    }
}
$y = fgets(STDIN);
$arrY = str_split($y);
$atari = array_search("o", $arrY);
$atari /= 2;

for ($posY = $L-1; $posY >= 0; $posY--) {
    if (isset($arrAmida[$posY][$atari-1])) {
        $atari--;
    } elseif (isset($arrAmida[$posY][$atari])) {
        $atari++;
    }
}

echo $atari + 1 . PHP_EOL;
