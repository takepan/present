<?php
    // 参照渡しでのキャスト
    $arr = array(2,3,4,5,6);

    var_dump($arr);


    foreach ($arr as &$val) {
        $val = (string) $val;
    }

    unset($value);

    var_dump($arr);

    /*
      [4]=>
      &string(1) "6"

      なんか最後だけ&がついている……
     */

    foreach ($arr as $key) {
        echo $key . "A" . PHP_EOL;
    }

    $arr2 = array(2,3,4,5,6,7);

    $arr2 = array_map("tostr", $arr2);

    var_dump($arr2);

    function tostr($v) {
        return (string) $v;
    }

