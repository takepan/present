<?php

    $a = new Dolly();
    $a->setP(455);

    $b = clone $a;
    echo $a->p . PHP_EOL;
    echo $b->p . PHP_EOL;

    $a->setP(111);

    echo $a->p . PHP_EOL;
    echo $b->p . PHP_EOL;

    class Dolly
    {
        public $p;

        function __construct()
        {
            $this->p = 44;
        }

        function setP($value)
        {
            $this->p = $value;
        }

    }
