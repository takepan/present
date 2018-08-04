<?php
    /*
        Problem URL : http://rco-contest-2017-qual.contest.atcoder.jp/tasks/rco_contest_2017_qual_c
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    fscanf(STDIN, "%d %d", $N, $K);
    $A = explode(" ", trim(fgets(STDIN)));
    for ($i = 1; $i <= $N; $i++) {
        fscanf(STDIN, "%s", $S[$i]);
        if (DEBUG) echo "==={$S[$i]}\n";
        if (in_array($i, $A)) {
            if (!isset($tmp)) {
                $tmp = $S[$i];
            } else {
                $tmp = longest($tmp, $S[$i]);
            }
            if (DEBUG) echo $tmp . PHP_EOL;
        }
    }

    if (DEBUG) echo "tmp: " . $tmp . PHP_EOL;
    if (DEBUG) var_dump($A);

    $mmin = -1;
    for ($i = 1; $i <= $N; $i++) {
        if (DEBUG) echo "---{$i}\n";
        if (!in_array($i, $A)) {
            if (DEBUG) echo "***{$S[$i]}\n";
            $moji = longest($tmp, $S[$i]);
            if (DEBUG) echo "moji: {$moji}\n";
            if ($moji == $tmp) {
                exit("-1\n");
            }
            $mmin = max($mmin, strlen($moji));
        }
    }

    echo substr($tmp, 0, $mmin + 1);
    echo PHP_EOL;

    function longest($A, $B) {
        $len = min(strlen($A), strlen($B));

        $l = 0;
        $r = $len;
        $ret = 0;
        $bool = true;

        while($bool) {
            $m = ceil(($l + $r) / 2);
            if (substr($A, 0, $m) == substr($B, 0, $m)) {
                if ($l == $m) {
                    $bool = false;
                    $ret = $m;
                } else {
                    $l = $m;
                }
            } else {
                if ($r == $m) {
                    $bool = false;
                    $ret = $m-1;
                } else {
                    $r = $m;
                }
            }
        }

        return substr($A, 0, $ret);
    }
