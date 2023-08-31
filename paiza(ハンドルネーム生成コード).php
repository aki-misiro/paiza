<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $line = trim($input_line);
    $boin = ['A', 'I', 'U', 'E', 'O', 'a', 'i', 'u', 'e', 'o'];
    $answer = '';
    foreach ($boin as $key => $value) {
        $line = str_replace($value, '', $line);
        $answer = $line;
    }
    echo $answer;
?>