<?php
	ini_set('memory_limit', '-1');

	// define('DEBUG', true);
	define('DEBUG', false);

    $q = "53187ab26fcd904e";
    $q = "1234567809abdefc";
    $a = "123456789abcdef0";

    $h = array();

    $obj = new stdClass();
    $obj->origin = 0;
    $obj->steps = 0;
    $obj->status = $q;

    $arr = array();

    $arr[] = $obj;
    // array_push($arr, $obj);
    $h[$q] = 1;
    $cursor = 0;

    if (DEBUG) var_dump($arr);

    while(isset($arr[$cursor])) {
    	if ($cursor % 100000 == 0) echo $cursor . PHP_EOL;
        if (DEBUG) echo $arr[$cursor]->status . PHP_EOL;
        if (DEBUG) echo chunk_split($arr[$cursor]->status, 4) ."\n";

        $arr2 = str_split($arr[$cursor]->status);

        $pos = array_search('0', $arr2);
        if (DEBUG) echo "\$pos = $pos\n";

        if ($pos > 3) {
            $arr3 = $arr2;

            $arr3[$pos] = $arr3[$pos - 4];
            $arr3[$pos - 4] = 0;

            $str3 = implode("", $arr3);
            if ($a == $str3) exit('A' . $cursor);

            // echo $str3 . PHP_EOL;
            if (DEBUG) echo chunk_split($str3, 4) ."\n";

            /////////////////////////////////////////////////////////

            if (!isset($h[$str3])) {
			    $obj2 = new stdClass();
			    $obj2->origin = $obj->origin;
			    $obj2->steps = $obj->steps + 1;
			    $obj2->status = $str3;

			    $arr[] = $obj2;
            }
        }

        if ($pos < 12) {
            $arr3 = $arr2;

            $arr3[$pos] = $arr3[$pos + 4];
            $arr3[$pos + 4] = 0;

            $str3 = implode("", $arr3);
            if ($a == $str3) exit('B' . $cursor);

            // echo $str3 . PHP_EOL;
            if (DEBUG) echo chunk_split($str3, 4) ."\n";

            /////////////////////////////////////////////////////////

            if (!isset($h[$str3])) {
			    $obj2 = new stdClass();
			    $obj2->origin = $obj->origin;
			    $obj2->steps = $obj->steps + 1;
			    $obj2->status = $str3;

			    $arr[] = $obj2;
            }
        }

        if ($pos % 4 != 0) {
            $arr3 = $arr2;

            $arr3[$pos] = $arr3[$pos - 1];
            $arr3[$pos - 1] = 0;

            $str3 = implode("", $arr3);
            if ($a == $str3) exit('C' . $cursor);

            // echo $str3 . PHP_EOL;
            if (DEBUG) echo chunk_split($str3, 4) ."\n";

            /////////////////////////////////////////////////////////

            if (!isset($h[$str3])) {
			    $obj2 = new stdClass();
			    $obj2->origin = $obj->origin;
			    $obj2->steps = $obj->steps + 1;
			    $obj2->status = $str3;

			    $arr[] = $obj2;
            }
        }

        if ($pos % 4 != 3) {
            $arr3 = $arr2;

            $arr3[$pos] = $arr3[$pos + 1];
            $arr3[$pos + 1] = 0;

            $str3 = implode("", $arr3);
            if ($a == $str3) exit('D' . $cursor);

            // echo $str3 . PHP_EOL;
            if (DEBUG) echo chunk_split($str3, 4) ."\n";

            /////////////////////////////////////////////////////////

            if (!isset($h[$str3])) {
			    $obj2 = new stdClass();
			    $obj2->origin = $obj->origin;
			    $obj2->steps = $obj->steps + 1;
			    $obj2->status = $str3;

			    $arr[] = $obj2;
            }
        }

        $cursor++;
    }




