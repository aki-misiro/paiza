<?php
$input_line = fgets(STDIN);
$line = trim($input_line);

$lineArray = explode(' ', $line);

$set1 = []; // 各ゴンドラ上限人数
for ($i = 0; $i < $lineArray[0]; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $set1[] = $s;
}

$set2 = []; // 各グループ人数
for ($i = $lineArray[0] - 1; $i < $lineArray[0] + $lineArray[1] - 1; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $set2[] = $s;
}

$gondola = [];
foreach ($set1 as $key => $value) {
    $gondola[$key] = 0;
}

$j = 0;
$i = 0;
while (true) {
    if ($set2[$i] <= $set1[$j]) {
        $gondola[$j] += $set2[$i];
        $i++; // 次のグループにする
        if ($i > count($set2) - 1) {
            break; // 全てのグループが乗り終わったらループを抜ける
        }
        if ($j > count($set1) - 2) {
            $j = 0; // ゴンドラが1周してきた
        } else {
            $j++; // 次のゴンドラにする
        }
    }
    if ($set2[$i] > $set1[$j]) {
        $gondola[$j] += $set1[$j];
        $set2[$i] = $set2[$i] - $set1[$j];
        if ($j > count($set1) - 2) {
            $j = 0; // ゴンドラが1周してきた
        } else {
            $j++; // 次のゴンドラにする
        }
    }
}

foreach ($gondola as $key => $value) {
    echo $value;
    echo "\n";
}
?>