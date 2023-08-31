<?php
// Your code here!
$input_line = fgets(STDIN);
$line = trim($input_line);
$lineArray = explode(' ', $line);

$set1 = [];
for ($i = 0; $i < $lineArray[1] + 2; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $set1[] = $s;
}

foreach ($set1 as $key => $value) {
    if ($key !== 1) {
        $setArray[] = explode(' ', $value);
    }
    if ($key == 1) {
        $wordWrap = wordwrap($value, 1, ',', true);
        $moveArray = explode(',', $wordWrap);
    }
}

for ($i = 0; $i < $lineArray[1]; $i++) {
    for ($j = 0; $j < $lineArray[2]; $j++) {
        $tableArray[$i][$j] = $setArray[$i + 1][$j];
    }
}
// F は、$i - 1
// R は、$j + 1
// B は、$i + 1
// L は、$j - 1
$setH = $setArray[0][0] - 1;
$setW = $setArray[0][1] - 1;

foreach ($moveArray as $key => $value) {
    if ($value == 'F') {
        $setH -= 1;
        $answer = $tableArray[$setH][$setW];
        echo $answer;
        echo "\n";
    }
    if ($value == 'R') {
        $setW += 1;
        $answer = $tableArray[$setH][$setW];
        echo $answer;
        echo "\n";
    }
    if ($value == 'B') {
        $setH += 1;
        $answer = $tableArray[$setH][$setW];
        echo $answer;
        echo "\n";
    }
    if ($value == 'L') {
        $setW -= 1;
        $answer = $tableArray[$setH][$setW];
        echo $answer;
        echo "\n";
    }
}
?>
