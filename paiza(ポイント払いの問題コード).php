<?php
$input_line = fgets(STDIN);
$line = trim($input_line);

$lineArray = explode(' ', $line);

$set1 = [];
for ($i = 0; $i < $lineArray[1]; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $set1[] = $s;
}

$zan = $lineArray[0];
$point = 0;
foreach ($set1 as $money) {
    if ($point < $money) {
        $zan = $zan - $money;
        $point += $money * 0.1;
        echo $zan . ' ' . $point;
        echo "\n";
    }
    if ($point >= $money) {
        $point -= $money;
        echo $zan . ' ' . $point;
        echo "\n";
    }
}
?>
