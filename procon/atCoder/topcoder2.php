<?php
    /*
        Problem URL : http://arc014.contest.atcoder.jp/tasks/arc014_1

        Score  : 100
        Result : AC
        Time   : 49 ms
        Memory : 3804 KB
     */

        $K = 5;

        for ($i1 = 1; $i1 <= 8; $i1++) {
        	echo $i1 . PHP_EOL;
	        for ($i2 = 1; $i2 <= 8; $i2++) {
	        	if ($i1 == $i2) continue;
		        for ($i3 = 1; $i3 <= 8; $i3++) {
		        	if ($i1 == $i3 || $i2 == $i3) continue;
			        for ($i4 = 1; $i4 <= 8; $i4++) {
			        	if ($i1 == $i4 || $i2 == $i4 || $i3 == $i4) continue;
				        for ($i5 = 1; $i5 <= 8; $i5++) {
        		        	if ($i1 == $i5 || $i2 == $i5 || $i3 == $i5 || $i4 == $i5) continue;
					        for ($i6 = 1; $i6 <= 8; $i6++) {
	        		        	if ($i1 == $i6 || $i2 == $i6 || $i3 == $i6 || $i4 == $i6 || $i5 == $i6) continue;
						        for ($i7 = 1; $i7 <= 8; $i7++) {
		        		        	if ($i1 == $i7 || $i2 == $i7 || $i3 == $i7 || $i4 == $i7 || $i5 == $i7 || $i6 == $i7) continue;

							        for ($i8 = 1; $i8 <= 8; $i8++) {
							        	if ($i1 == $i8 || $i2 == $i8 || $i3 == $i8 || $i4 == $i8 || $i5 == $i8 || $i6 == $i8 || $i7 == $i8) continue;
							        	$c1 = max($i1, $i2);
							        	$c2 = max($i3, $i4);
							        	$c3 = max($i5, $i6);
							        	$c4 = max($i7, $i8);
							        	$c5 = max($i1, $i3, $i5, $i7);
							        	$c6 = max($i2, $i4, $i6, $i8);
							        	if ($c1 >= $K && $c2 >= $K && $c3 >= $K && $c4 >= $K && $c5 >= $K && $c6 >= $K) {
							        		$s = implode("-", array($c1, $c2, $c3, $c4, $c5, $c6));
							        		$arr[$s] = 1;
							        	}

							        }
						        }
					        }
				        }
			        }
		        }
	        }
        }
        echo count($arr);