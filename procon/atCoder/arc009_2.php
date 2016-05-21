<?php
/*
    Problem URL : http://arc009.contest.atcoder.jp/tasks/arc009_2

    Score  : 100
    Result : AC
    Time   : 73 ms
    Memory : 4664 KB
 */

$arrR = explode(" ", trim(fgets(STDIN)));
$arrR = array_flip($arrR);

$arrAnswer = array();
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $a);
    $a_len = strlen($a);
    $tmp = "";
    for ($j = 0; $j < $a_len; $j++) {
        $c = (int)substr($a, $j, 1);
        $tmp .= $arrR[$c];
    }

    $arrAnswer[] = array("takahashi" => (string)$a, "ours" => $tmp);
}

usort($arrAnswer, function ($a, $b) {
    return $a['ours'] - $b['ours'];
});

foreach ($arrAnswer as $k => $v) {
    echo $v['takahashi'] . PHP_EOL;
}
