<?php
    $list1 = ['a', 'b', 'c'];
    $list2 = ['1', '2', '3'];

    $ans = array();

    foreach ($list1 as $k => $v) {
        $ans[] = $list1[$k];
        $ans[] = $list2[$k];
    }

    echo json_encode($ans) . PHP_EOL;
