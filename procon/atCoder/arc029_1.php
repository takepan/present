<?php
    /*
        Problem URL : http://arc029.contest.atcoder.jp/tasks/arc029_1

        Score  : 100
        Result : AC
        Time   : 56 ms
        Memory : 3792 KB
     */

    // define ('DEBUG', TRUE);
    define ('DEBUG', FALSE);

    $ans = 0;

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        $t[$i] = trim(fgets($fp));
        $ans += $t[$i];
    }
    $target = $ans / 2;
    $total = $ans;

    $lenN = pow(2, $N - 1);
    for ($i = 0; $i < $lenN; $i++) {
        $str = decbin($i);
        $len_str = strlen($str);
        $str2 = "0";
        $len_str2 = $N - 1 - $len_str;
        if ($len_str2 > 0) {
            $str2 .= str_repeat("0", $len_str2);
        }
        $str2 .= $str;
        $str2 = substr($str2, 0, $N);

        if (DEBUG) echo $str2 . " ";

        $str2len = strlen($str2);

        $score = 0;
        for ($j = 0; $j < $str2len; $j++) {
            if ($str2[$j] == '0') {
                $score += $t[$j];
            }
        }

        $score_rev = $total - $score;

        if ($score >= $target) {
            if ($ans > $score) {
                $ans = $score;
            }
        }
        if ($score_rev >= $target) {
            if ($ans > $score_rev) {
                $ans = $score_rev;
            }
        }

        if (DEBUG) echo $score . " " . $score_rev . " " . $ans . "\n";
    }

    echo $ans . PHP_EOL;
