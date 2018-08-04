<?php
    /*
        Problem URL : http://arc070.contest.atcoder.jp/tasks/arc070_b

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    define('DEBUG', true);
    // define('DEBUG', false);

    if (DEBUG) {
        $start = microtime(true);
    }
    echo solve() . PHP_EOL;
    if (DEBUG) {
        $t = microtime(true) - $start;
        printf ("Elapsed time: %7.3f sec\n", $t);
    }


    function solve() {
        fscanf(STDIN, "%d %d\n", $N, $K);
        // echo "K:{$K}\n";
        // exit;

        // 満点回答諦めるの儀
        if ($N > 400 || $K > 400) {
            exit("-1\n");
        }

        $a = explode(" ", trim(fgets(STDIN)));

        $org_a = $a;
        $sum = array();

        foreach ($a as $key => $v) {
            if ($sum[$v] !== null) {
                continue;
            }
            $aa = $a;
            $out = array_splice($aa, $key, 1);
            // echo "out:" . $out[0] . PHP_EOL;

            // $tmp[0] = 1;
            $tmp = array(0 => 1);

            // echo count($aa) . PHP_EOL;
            foreach ($aa as $val) {
                // if (DEBUG) echo "val:" . $val . PHP_EOL;
                foreach ($tmp as $key2 => $dummy) {
                    // if (DEBUG) echo "val:" . $val . " key2:" . $key2 . PHP_EOL;

                    if ($key2+$val < $K) {
                        $tmp[$key2+$val] = 1;
                    }
                }
            }
            // echo count(array_keys($tmp)) . PHP_EOL;
            // echo implode(" ", array_keys($tmp)) . PHP_EOL;

            // if (DEBUG) var_dump($tmp);

            $sum[$v] = 1;
            // $step1 = array_keys($tmp);
            // var_dump($step1);
            // $step2 = max($step1);
            // echo $step2 . PHP_EOL;
            // echo max(array_keys($tmp)) . " + {$out[0]} >= {$K}\n";
            if (max(array_keys($tmp)) + $out[0] >= $K) {
                $sum[$v] = 0;
                // if (DEBUG) echo "GOT IT!\n";
            }
            // for ($x = $K-1; $x >= $K-$out[0]; $x--) {
            //     // if (DEBUG) echo "x:{$x}\n";
            //     if (isset($tmp[$x])) {
            //         $sum[$v] = 0;
            //         if (DEBUG) echo "GOT IT!\n";
            //         break;
            //     }
            // }

            // sleep(3);


        }
        $ans = 0;
        foreach ($a as $val) {
            $ans += $sum[$val];
        }

        return $ans;
    }
