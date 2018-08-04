<?php
    $a = array('a' => 'aaa', 'b' => array('b1' => 111, 'b3' => 333));
    $b = array('a' => 'BBB', 'b' => array('b2' => 2, 'b4' => 4));
    $c = array_merge($a, $b);
    var_dump($c);
    $d = $a+$b;
    var_dump($d);
    $e = array_merge_recursive($a, $b);
    var_dump($e);

    // $a <- $b
    function array_overwrite($a, $b) {
        if (is_array($a) === false) return;
        if (is_array($b) === false) return;

        foreach ($b as $key => $value) {
            if (is_array($value) === true) {
                if (isset($a[$key]) === true) {
                    $a[$key] = array_overwrite($a[$key], $b[$key]);
                } else {
                    $a[$key] = $b[$key];
                }
            } else {
                $a[$key] = $value;
            }
        }
        return $a;
    }

    echo "====================\n";
    $f = array_overwrite($a, $b);
    var_dump($f);

    $aa = array();
    $bb = array("a" => 1, "b" => array("2" => "c", "d" => "3"));
    $g = array_overwrite($aa, $bb);
    var_dump($g);

    $aa = array("a" => 1, "b" => array("2" => "c", "d" => "3"));
    $bb = array();
    $h = array_overwrite($aa, $bb);
    var_dump($h);

    echo "====================\n";
    $a2 = array("a" => "1", "b" => array("c" => "2", "d" => array("e" => 3)));
    $b2 = array("e" => "1", "f" => array("g" => "2", "h" => array("i" => 3)));
    $i = array_overwrite($a2, $b2);
    var_dump($i);

    echo "====================\n";
    $a2 = array("a" => "1", "b" => array("c" => "2", "d" => array("e" => 3)));
    $b2 = array("e" => "1", "b" => array("c" => "22", "d" => array("e" => 33)));
    $i = array_overwrite($a2, $b2);
    var_dump($i);

    echo "====================\n";
    $a2 = array("a" => "1", "b" => array("c" => "2", "d" => array("e" => 3)));
    $b2 = array("a" => "2", "f" => array("c" => "22", "d" => array("e" => 33)));
    $i = array_overwrite($a2, $b2);
    var_dump($i);

