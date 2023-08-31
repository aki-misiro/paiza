<?php
   $input_line = fgets(STDIN);
    $line = trim($input_line);
    $array = explode(' ', $line);
    for ($i = 1; $i <= $array[0]; $i++) {
        if ($i % $array[1] !== 0 && $i % $array[2] !== 0) {
            echo 'N';
        }
        if ($i % $array[1] === 0) {
            echo 'A';
        }
        if ($i % $array[2] === 0) {
            echo 'B';
        }
        echo "\n";
    }
?>