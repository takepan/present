<?php
    /*
        Problem URL : http://k2pc-easy.contest.atcoder.jp/tasks/k2pc001_e2

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    // 実装が間違っていると思われる。
    // $i === 0 のときを排除する必要がない。

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $m = array(0, 0, 0, 0, 0, 0, 0);
    $mm = array(0, 0, 0, 0, 0, 0, 0);

    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));
    for ($i = 0; $i < $N; $i++) {
        $tmp = str_split(trim(fgets(STDIN)));

        for ($j = 0; $j < count($tmp); $j++) {
            if ($tmp[$j] === 'X') {
                $m[$j]++;
            } else {
                $m[$j] = 0;
            }
            if ($i !== 0) {
                $mm[$j] = max($mm[$j], $m[$j]);
            }
        }
        // echo implode("", $m) . PHP_EOL;
    }

    rsort($mm);
    // var_dump($mm);

    rsort($a);
    // var_dump($a);

    for ($i = 0; $i < 7; $i++) {
        if ($mm[$i] > $a[$i]) {
            exit("NO\n");
        }
    }
    echo "YES\n";
