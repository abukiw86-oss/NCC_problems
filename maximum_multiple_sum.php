<?php
$t = (int)fgets(STDIN);

while ($t--) { 
    $n = (int)fgets(STDIN);

    $maxSum = -1;
    $bestX = 2; 
    for ($x = 2; $x <= $n; $x++) {
        $currentSum = 0; 
        for ($multiple = $x; $multiple <= $n; $multiple += $x) {
            $currentSum += $multiple;
        } 
        if ($currentSum > $maxSum) {
            $maxSum = $currentSum;
            $bestX = $x;
        }
    } 
    echo $bestX . PHP_EOL;
}