<?php
    $input_line = fgets(STDIN);
    $input_line = trim($input_line);
    $setArray = [];
    for ($i = 0; $i < $input_line; $i++) {
        $s = trim(fgets(STDIN));
        $s = str_replace(array("\r\n","\r","\n"), '', $s);
        $setArray[] = $s;
    }
    
    $num = 1;
    $sum = 0;
    foreach ($setArray as $targetNum) {
        while($targetNum > $num) {
            if ($targetNum % $num == 0) {
                $sum += $num;
            }
            $num++;
        }
        if ($targetNum == $sum) {
            echo 'perfect';
            echo "\n";
        } else if ($targetNum - $sum == 1) {
            echo 'nearly';
            echo "\n";
        } else {
            echo 'neither';
            echo "\n";
        }
        $sum = 0;
        $num = 1;
    }
?>