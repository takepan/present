<?php
/*
    Problem URL : http://abc049.contest.atcoder.jp/tasks/abc049_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $s);

echo (in_array($s, str_split("aiueo"))) ? "vowel\n" : "consonant\n";
