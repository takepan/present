<?php

    class aru {

        public $a;
        public $b;

        function __construct() {
            $b = new stdClass();
            $b->c = "d";
        }
    }

    $arr = array("a" => 50, "b" => array("c" => "azzz"));

    $aru = new aru();
    foreach ($arr as $key => $val) {
        if (!is_array($key)) {
            $aru->$key = $val;
        } else {

        }
    }

    var_dump($aru);
