<?php
fscanf(STDIN, "%d", $D);
$msg = array('Christmas');
for ($i = 25; $i > $D; $i--) {
    $msg[] = "Eve";
}
echo implode(" ", $msg);
