<?php
  fscanf(STDIN, "%d %d", $N, $K);
  fscanf(STDIN, "%s", $S);
  $S[$K - 1] = strtolower($S[$K - 1]);
  echo $S;
