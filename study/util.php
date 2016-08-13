<?php
namespace util;

class Util
{
    public static function arrayToObj($arr, $obj)
    {
        foreach ($arr as $k => $v) {
            if (is_array($v)) {
                $this->ArrayToObj($v, $obj->$k);
            } else {
                $obj->$k = $v;
            }
        }
    }
}
