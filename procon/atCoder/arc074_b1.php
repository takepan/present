<?php
    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));
    $b = $a;

    $partA = array_splice($a, 0, $N * 2);
    $originalA = $partA;
    arsort($partA);
    $rawA = $partA;
    rsort($rawA);
    $backupA = $rawA;
    $sumA = array_sum(array_splice($rawA, 0, $N));
    //echo $sumA . PHP_EOL;
    $sortA = array_flip(array_keys($partA));
    //var_dump($partA);
    //exit;
    /*
    echo "sort: ";
    foreach ($sortA as $k => $v) {
        echo "{$k}->{$v} ";
    }
    echo PHP_EOL;
    */

    $line = $N - 1;
    $popA = 0;
    
    $arrA = [$sumA];
    for ($i = $N * 2 - 1; $i >= $N; $i--) {
        //printf("%d %d \n", $sortA[$i], $line);
        if ($sortA[$i] <= $line) {
            $sumA -= $originalA[$i];
            $popA++;

            $line++;
            while (is_null($backupA[$line])) {
                $line++;
            }
            $sumA += $backupA[$line];
            //printf("+ %d - %d # %d\n", $backupA[$line], $backupA[$popA]);
        }
        $backupA[$sortA[$i]] = null;
        $arrA[] = $sumA;
    }
    
    //var_dump($backupA);
    //var_dump($partA);
    //var_dump($arrA);


    $partB = array_splice($b, $N, $N * 2);
    $originalB = $partB;
    asort($partB);
    $rawB = $partB;
    sort($rawB);
    $backupB = $rawB;
    $sumB = array_sum(array_splice($rawB, 0, $N));
    //echo $sumB . PHP_EOL;
    $sortB = array_flip(array_keys($partB));
    //var_dump($partB);
    //exit;
    /*
    echo "sort: ";
    foreach ($sortB as $k => $v) {
        echo "{$k}->{$v} ";
    }
    echo PHP_EOL;
    */

    $line = $N - 1;
    $popB = 0;
    
    $arrB = [$sumB];
    for ($i = 0; $i < $N; $i++) {
        //printf("%d %d \n", $sortB[$i], $line);
        if ($sortB[$i] <= $line) {
            $sumB -= $originalB[$i];
            //var_dump($backupB);
            $popB++;

            $line++;
            while (is_null($backupB[$line])) {
                $line++;
            }
            $sumB += $backupB[$line];
            //printf("+ %d - %d\n", $backupB[$line], $originalB[$i]);
        } else {
            //echo "SKIP \n";
        }
        $backupB[$sortB[$i]] = null;
        $arrB[] = $sumB;
    }
    
    //var_dump($backupA);
    //var_dump($partB);
    //var_dump($arrA);
    //var_dump($arrB);

    $ans = -PHP_INT_MAX;
    foreach ($arrA as $key => $val) {
        $ans = max($ans, $arrA[$key] - $arrB[$N - $key]);
    }
    echo $ans;
