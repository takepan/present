<?php
fscanf(STDIN, "%s", $X);
echo preg_match("/^[357]$/", $X) ? "YES" : "NO";
