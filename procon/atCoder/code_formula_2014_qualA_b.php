<?php
    /*
        Problem URL : http://code-formula-2014-quala.contest.atcoder.jp/tasks/code_formula_2014_qualA_b

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d %d", $a, $b);
    $p = explode(" ", trim(fgets(STDIN)));
    $q = explode(" ", trim(fgets(STDIN)));


    $pin = array_pad(array(), 10, 'x');

    foreach ($p as $v) {
        $pin[$v] = '.';
    }
    foreach ($q as $v) {
        $pin[$v] = 'o';
    }
    printf("%s %s %s %s\n", $pin[7], $pin[8], $pin[9], $pin[0]);
    printf(" %s %s %s\n", $pin[4], $pin[5], $pin[6]);
    printf("  %s %s\n", $pin[2], $pin[3]);
    printf("    %s\n", $pin[1]);
