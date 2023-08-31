<?php
$input_line = trim(fgets(STDIN));
$num1 = 0;
$num2 = 0;
$siji = [];
for ($i = 0; $i < $input_line; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $s = explode(" ", $s);
    $siji[$i][0] = $s[0];
    $siji[$i][1] = $s[1];
    if ($siji[$i][0] == 'SET') {
        $siji[$i][2] = $s[2];
    }
}
foreach ($siji as $key => $value) {
    // SET i a : 変数 i に値 a を代入する (i = 1, 2)
    if ($value[0] == 'SET' && $value[1] == 1) {
        $num1 = $value[2];
    }
    if ($value[0] == 'SET' && $value[1] == 2) {
        $num2 = $value[2];
    }
    
    // ADD a :「変数 1 の値 + a」を計算し、計算結果を変数 2 に代入する
    if ($value[0] == 'ADD') {
        $num2 = $num1 + $value[1];
    }
    
    // SUB a :「変数 1 の値 - a」を計算し、計算結果を変数 2 に代入する
    if ($value[0] == 'SUB') {
        $num2 = $num1 - $value[1];
    }
}

echo $num1 . ' ' . $num2;
?>