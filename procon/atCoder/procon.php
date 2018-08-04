<?php
    // 引数
    // 1番目 プログラムパス
    // 2番目 ケースディレクトリパス
    // 3番目 ノンストップモード

    // var_dump($argv);

    $COLOR_NG = "\e[33;41m";
    $COLOR_OK = "\e[37;44m";
    $COLOR_NG_BOLD = "\e[33;41;1m";
    $COLOR_OK_BOLD = "\e[37;44;1m";
    $COLOR_OFF = "\e[m";

    // 初期値
    $boolNonstop = false;

    $prg = $argv[1] . ".php";
    $cas = "atcoder_testcases/" . $argv[2];
    if (isset($argv[3])) {
        $boolNonstop = true;
    }
    // echo $cas . PHP_EOL;

    // TimeLimit(mili second)
    define('TIME_LIMIT', 2000);

    $arrSummary = array("AC" => 0, "WA" => 0, "TLE" => 0);

    // プログラムファイル
    if (file_exists($prg)) {
        echo "program ... FOUND\n";
    } else {
        echo "program ... NOT FOUND\n";
        exit;
    }

    // ケースファイル
    if (is_dir($cas)) {
        echo "case file ... FOUND\n\n";
        $d_in = $cas . "/in";
        $d_out = $cas . "/out";
        $d = dir($d_in);
        // echo "Handle: " . $d->handle . "\n";
        // echo "Path: " . $d->path . "\n";
        while (false !== ($entry = $d->read())) {
            $case_path = $d_in . "/" . $entry;
            $ans_path = $d_out . "/" . $entry;
            // echo "***{$ans_path}\n";
            if (!file_exists($ans_path)) continue;
            if (file_exists($ans_path)) {
                $ans = trim(file_get_contents($ans_path));
                // echo "^^^^^^^^^^^^^^^^".$ans."VVVVVVVVVVVVVVVVV\n";
            } else {
                exit("out file not found ... {$ans_path} \n");
            }
            if (!is_dir($case_path)) {
                // echo "now exam ... ".$entry."\n";
                $command = "php -f {$prg} < {$case_path}";
                // echo $command . PHP_EOL;
                $time_s = microtime(true);
                exec($command, $ret2);
                $time_e = microtime(true);
                $time_elapse = ($time_e - $time_s) * 1000;
                $r = implode("\n", $ret2);
                // echo "^^^^^^^^^^^^^^^^{$ret}vvvvvvvvvvvvvvvvvv\n";
                // echo "^^^^^^^^^^^^^^^^".$r."vvvvvvvvvvvvvvvvvv\n";
                $ret2 = null;
                if ($ans === $r) {
                    $correct = "AC";
                    $color = $COLOR_OK;
                } else {
                    $correct = "WA";
                    $color = $COLOR_NG;
                    if ($boolNonstop !== true) {
                        echo "Expected:\n";
                        echo $ans;
                        echo "\n";
                        echo "Actual:\n";
                        echo $r;
                        echo "\n";
                        exit;
                    }
                }
                if ($time_elapse > TIME_LIMIT) {
                    $correct = "TLE";
                    $color = $COLOR_NG;
                }
                $arrSummary[$correct]++;

                printf("%-13s   :  %8.3f ms   :   %s[ %s ]%s\n", $entry, $time_elapse, $color, $correct, $COLOR_OFF);
                // exex("");
            }
        }
        $d->close();

        $totalResult = "";
        if ($arrSummary['WA'] > 0) {
            $totalResult = "WA";
            $COLOR_ON = $COLOR_NG_BOLD;
        } else if ($arrSummary['TLE'] > 0) {
            $totalResult = "TLE";
            $COLOR_ON = $COLOR_NG_BOLD;
        } else {
            $totalResult = "AC";
            $COLOR_ON = $COLOR_OK_BOLD;
        }
        echo PHP_EOL;

        printf("Result : %s[ %s ]%s\n", $COLOR_ON, $totalResult, $COLOR_OFF);
        echo PHP_EOL;
    } else {
        echo "case file NOT FOUND\n";
        exit;
    }


