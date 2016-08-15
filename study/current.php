<?php
    $arr = array('a' => 1, '22' => 2, 'z' => "55");

    echo key(current($arr));
    // echo each($arr);
    exit;
    echo current($arr);
    echo next($arr);
    echo prev($arr);
    exit;

    // each ($key, $val) = current($arr);
    // var_dump($key);
    // var_dump($val);
    // exit;
    // echo key(current($arr));
    // echo key(next($arr));
    // echo key(prev($arr));
