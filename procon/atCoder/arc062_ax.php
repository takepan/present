<?php
/*
    http://arc062.contest.atcoder.jp/tasks/arc062_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

define('DEBUG', true);
// define('DEBUG', false);

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $T, $A);
    if (!isset($TT) && !isset($AA)) {
        $TT = $T;
        $AA = $A;
    } else {
        $Tratio = $TT / $T;
        $Aratio = $AA / $A;
        if ($Tratio == $Aratio) {

        } else {
            $Tratio = ceil($Tratio);
            $Aratio = ceil($Aratio);

            // case 1
            $newT1 = $T * $Tratio;
            $newA1 = $A * $Tratio;
            $bool1 = (($newT1 >= $TT) && ($newA1 >= $AA));

            // case 2
            $newT2 = $T * $Aratio;
            $newA2 = $A * $Aratio;
            $bool2 = (($newT2 >= $TT) && ($newA2 >= $AA));

            if ($bool1 === true) {
                if ($bool2 === true) {
                    if ($newT1 + $newA1 < $newT2 + $newA2) {
                        $TT = $newT1;
                        $AA = $newA1;
                    } else {
                        $TT = $newT2;
                        $AA = $newA2;
                    }
                } else {
                    $TT = $newT1;
                    $AA = $newA1;
                }
            } else {
                if ($bool2 === true) {
                    $TT = $newT2;
                    $AA = $newA2;
                } else {
                    exit("ERR\n");
                }
            }
            if (DEBUG) {
                echo "T1:{$newT1} A1:{$newA1} T2:{$newT2} A2:{$newA2}\n";
                echo "TT:{$TT} AA:{$AA}\n";
                echo "\n";
            }
        }
    }

}
printf("%d\n", $TT + $AA);
