<?php
/*
    Problem URL : http://arc069.contest.atcoder.jp/tasks/arc069_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $s, $c);

$cc = floor($c / 2);
// if ($s < $cc) {
    // ccが多く作れる
    $ext = floor(($cc - $s) / 2);
// }

// printf("%d %d %d\n", $s, $cc, $ext);

echo min($s, $cc) + max($ext, 0);
echo PHP_EOL;