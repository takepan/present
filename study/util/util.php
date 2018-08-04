<?php
namespace util;

class Util
{
    public static function arrayToObj($arr, $obj)
    {
        foreach ($arr as $k => $v) {
            if (is_array($v)) {
                self::ArrayToObj($v, $obj->$k);
            } else {
                // Overwrite
                $obj->$k = $v;
                // Keep
                // $obj->$k = $obj->$k ?: $v;
            }
        }
    }
}
