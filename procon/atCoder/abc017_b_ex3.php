<?php
    echo (preg_match("/^(ch|o|k|u)+$/", trim(fgets(STDIN)))) ? "YES\n" : "NO\n";
