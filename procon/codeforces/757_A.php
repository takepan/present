<?php
    fscanf(STDIN, "%s", $s);

    $arr = str_split($s);
    $len = count($arr);

    $w = "Bulbasaur";
    $arrW = str_split($w);
    $sample = array();
    // var_dump($arrW);

    for ($i = 0; $i < count($arrW); $i++) {
        $sample[$arrW[$i]]++;
    }
    // var_dump($sample);

    $sum = array();
    $curr = $arrW;

    $ans = PHP_INT_MAX;

    for ($i = 0; $i < $len; $i++) {
        $sum[$arr[$i]]++;
    }
    // var_dump($sum);

    foreach ($sample as $key => $val) {
        // echo "key:{$key} val:{$val}\n";
        $tmp = floor($sum[$key] / $sample[$key]);
        $ans = min($tmp, $ans);
    }

    echo $ans;

