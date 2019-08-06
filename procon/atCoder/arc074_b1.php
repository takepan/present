<?php
    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));
    $b = $a;
    $partA = array_splice($a, 0, $N * 2);
    $partB = array_splice($b, $N, $N * 2);
    arsort($partA);
    $rawA = $partA;
    rsort($rawA);
    $backupA = $rawA;
    $sumA = array_sum(array_splice($rawA, 0, $N));
    echo $sumA . PHP_EOL;
    $sortA = array_flip(array_keys($partA));
    //var_dump($partA);
    //exit;
    echo "sort: ";
    foreach ($sortA as $k => $v) {
        echo "{$k}->{$v} ";
    }
    echo PHP_EOL;
    
    $line = $N - 1;
    $popA = 0;
    
    $arr = [$sumA];
    for ($i = $N * 2 - 1; $i >= $N; $i--) {
        printf("%d %d \n", $sortA[$i], $line);
        if ($sortA[$i] <= $line) {
            $sumA -= $backupA[$popA];
            $popA++;
            $line++;
            $sumA += $backupA[$line];
        }
        $arr[] = $sumA;
    }
    
    var_dump($backupA);
    var_dump($arr);
