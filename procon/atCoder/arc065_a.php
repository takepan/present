<?php
/*
    Problem URL : http://arc065.contest.atcoder.jp/tasks/arc065_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $s);
$arrayMoji = array('dream', 'dreamer', 'erase', 'eraser');

$jobs = array(0);

while ($jobs) {
    echo implode(" ", $jobs) . PHP_EOL;
    $pos = array_pop($jobs);
    $partial = substr($s, $pos);
    foreach ($arrayMoji as $moji) {
        $len = strlen($moji);
        $partial_partial = substr($partial, 0, $len);
        if ($partial_partial == $moji) {
            $newLoc = $pos + $len;
            if ($newLoc == strlen($s)) {
                exit("YES\n");
            }
            array_push($jobs, $pos + $len);
        }
    }
}

echo "NO\n";
