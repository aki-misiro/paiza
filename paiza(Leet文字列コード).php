<?php
    $input_line = fgets(STDIN);
    $line = trim($input_line);
    $wordWrap = wordwrap($line, 1, ',', true);
    
    $array = explode(',', $wordWrap);
    
    foreach ($array as $key => $value) {
        if ($value === 'A') {
            $array[$key] = str_replace($value, '4', $array[$key]);
        }
        if ($value === 'E') {
            $array[$key] = str_replace($value, '3', $array[$key]);
        }
        if ($value === 'G') {
            $array[$key] = str_replace($value, '6', $array[$key]);
        }
        if ($value === 'I') {
            $array[$key] = str_replace($value, '1', $array[$key]);
        }
        if ($value === 'O') {
            $array[$key] = str_replace($value, '0', $array[$key]);
        }
        if ($value === 'S') {
            $array[$key] = str_replace($value, '5', $array[$key]);
        }
        if ($value === 'Z') {
            $array[$key] = str_replace($value, '2', $array[$key]);
        }
    }
    $answer = implode('', $array);
    echo $answer;
?>