<?php
    public class A {
        public $aa;
        public $ab;

        public function __construct()
        {
            $this->aa = "aa1";
            $this->ab = new B();
        }
    }

    public class B {
        public $bb;

        public function __construc()
        {
            $this->bb = "bb1";
        }
    }

    $obj1 = new A();

    var_dump($obj1);

