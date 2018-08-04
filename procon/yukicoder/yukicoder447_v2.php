<?php
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    define('DEBUG', false);

    $ans = array();
    $Pcnt = array();

    fscanf(STDIN, "%d", $N);
    $L = explode(" ", trim(fgets(STDIN)));
    $cntL = count($L);
    fscanf(STDIN, "%d", $T);
    for ($i = 0; $i < $T; $i++) {
        fscanf(STDIN, "%s %s", $Name, $P);
        $intP = ord($P) - ord('A');
        if (DEBUG) echo "{$P} {$intP}\n";
        $Pcnt[$intP]++;
        if (DEBUG) echo $Pcnt[$intP] . PHP_EOL;

        $score = floor(50 * $L[$intP] + 50 * $L[$intP] / (.8 + .2 * $Pcnt[$intP]));

        if (DEBUG) echo $score . PHP_EOL;

        $ans[$Name][$intP] = $score;
        $ans[$Name]['lastmod'] = $i;

    }

    if (DEBUG) var_dump($ans);

    foreach ($ans as $name => $v) {
        $score = 0;
        for ($i = 0; $i < $cntL; $i++) {
            $score += $ans[$name][$i];
        }
        $ans[$name]['score'] = $score;
    }

    $board = array();
    foreach ($ans as $name => $v) {
        $base = $ans[$name];
        $base['name'] = $name;
        $board[] = $base;
    }

    if (DEBUG) var_dump($board);

    $people = count($board);
    for ($i = 0; $i < $people - 1; $i++) {
        for ($j = $i + 1; $j < $people; $j++) {
            $swap1 = $board[$i]['score'] < $board[$j]['score'];
            $swap2a = $board[$i]['score'] == $board[$j]['score'];
            $swap2b = $board[$i]['lastmod'] > $board[$j]['lastmod'];
            if ($swap1 || ($swap2a && $swap2b)) {
                $tmp = $board[$i];
                $board[$i] = $board[$j];
                $board[$j] = $tmp;
            }

        }
    }

    if (DEBUG) var_dump($board);

    for ($i = 0; $i < $people; $i++) {
        echo $i + 1;
        echo " ";
        echo $board[$i]['name'];
        echo " ";
        for ($j = 0; $j < $cntL; $j++) {
            echo $board[$i][$j] ?: 0;
            echo " ";
        }
        echo $board[$i]['score'];
        echo PHP_EOL;
    }
