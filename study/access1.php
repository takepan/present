<?php
    $a1 = new access1();
    echo $a1->pub;

    class access1 {
        public $pub;
        protected $pro;
        private $pri;

        function __construct()
        {
            $this->pub = "PUB";
            $this->pro = "PRO";
            $this->pri = "PRI";
        }

        public function setPro($v)
        {
            $this->pro = $v;
        }

        public function setPri($v)
        {
            $this->pri = $v;
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
