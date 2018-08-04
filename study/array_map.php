<?php
    $arr = array(0, 4, 5, 7);

    $arr = array_map(function($a) {return (string)$a; }, $arr );

    var_dump($arr);


    $arr2 = array(0, 4, 5, 7);

    // $arr3 = array_walk($arr2, function($key, $val) {return  (string) $val; });
    // $arr2 = explode("&", implode("&", $arr2));
    $arr2 = explode(chr(52), implode(chr(52), $arr2));

    var_dump($arr2);

