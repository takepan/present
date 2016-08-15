<?php
    require_once(__DIR__.'/access1.php');

    $a1 = new access1();

    $a2 = new access2();
    echo $a2->pub . PHP_EOL;

    $a3 = new access2();
    $a3->solve($a1);
    echo $a3->pub . PHP_EOL;
    // echo $a3->pro . PHP_EOL;
    echo $a3->getPro() . PHP_EOL;
    echo $a3->getPri() . PHP_EOL;

    class access2 {
        public $pub;
        protected $pro;
        private $pri;

        function __construct()
        {
            $this->pub = "PUB 2";
            $this->pro = "PRO 2";
            $this->pri = "PRI 2";
        }

        function solve(access1 $a1)
        {
            $this->pub = $a1->pub;
            $this->pro = $a1->getPro();
            $this->pri = $a1->getPri();
        }

        public function getPro()
        {
            return $this->pro;
        }

        public function getPri()
        {
            return $this->pri;
        }
    }
