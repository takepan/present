<?php
namespace util;

require_once(__DIR__ . "/util.php");

$x = new Test();
$x->exec();
var_dump($x);

class Test
{
    public $arr;

    public $obj;

    public function __construct()
    {
        $this->arr = array('a' => 111, 'b' => array('c' => 222, 'd' => 333));

        var_dump($this->arr);

        $this->obj = new \stdClass();
        $this->obj->a = 0;
        $this->obj->b = new \stdClass();
        $this->obj->b->c = 0;
        $this->obj->b->d = 0;

    }

    public function exec()
    {
        Util::arrayToObj($this->arr, $this->obj);

        var_dump($this->obj);
    }

}


