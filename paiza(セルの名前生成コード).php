<?php
// Your code here!
$input_line = fgets(STDIN);
$line = trim($input_line);
$num = (int)$line;

$af = range("A", "Z");
$retstr = '';
$count = count($af);

if (($num - $count) / $count > $count) {
    $sho = $num / $count;
    
    $amari = $num % $count;
    if ($amari == 0) {
        $amari = $amari + 26;
        $sho = $sho - 1;
    }
    $amari = $amari - 1;
    
    $sho2 = $sho / $count;
    $sho2 = $sho2 - 1;
    
    $amari2 = $sho % $count;
    if ($amari2 == 0) {
        $amari2 = $amari2 + 26;
        $sho2 = $sho2 - 1;
    }
    $amari2 = $amari2 - 1;
    
    echo $af[$sho2] . $af[$amari2] . $af[$amari];
}

if (($num - $count) / $count <= $count && ($num - $count) / $count > 0) {
    $sho = $num / $count;
    $sho = $sho - 1;
    
    $amari = $num % $count;
    if ($amari == 0) {
        $amari = $amari + 26;
        $sho = $sho - 1;
    }
    $amari = $amari - 1;
    
    echo $af[$sho] . $af[$amari];
}

if (($num - $count) / $count <= 0) {
    echo $af[$num - 1];
}
?>