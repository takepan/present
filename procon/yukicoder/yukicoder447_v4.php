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
        $ans[$Name]['score'] += $score;

    }

    if (DEBUG) var_dump($ans);

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
                list($board[$i], $board[$j]) = array($board[$j], $board[$i]);
            }

        }
    }

    if (DEBUG) var_dump($board);

    $output = "";
    for ($i = 0; $i < $people; $i++) {
        $output .= $i + 1;
        $output .= " ";
        $output .= $board[$i]['name'];
        $output .= " ";
        for ($j = 0; $j < $cntL; $j++) {
            $output .= $board[$i][$j] ?: 0;
            $output .= " ";
        }
        $output .= $board[$i]['score'];
        $output .= PHP_EOL;
    }

    echo $output;