<?php
    // 変数の大文字・小文字は区別される

    $test1 = "pattern1";
    $Test1 = "pattern2";
    $TEST1 = "pattern3";

    echo $TEST1 . PHP_EOL;
    echo $Test1 . PHP_EOL;
    echo $test1 . PHP_EOL;

    function getA() {
        echo "getA\n"
    }
