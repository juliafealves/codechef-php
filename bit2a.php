<?php
$tests = readline();

while ($tests > 0) {
    $size = readline();
    $sorted = explode(" ", readline());
    $greater = [];

    for ($i = 0; $i < $size; $i++) {
        $greater[$i] = 0;

        for ($j = $i + 1; $j < $size; $j++) {
            if ($sorted[$i] < $sorted[$j]) {
                $greater[$i] += 1;
            }
        }
    }

    echo implode(" ", $greater) . "\n";
    $tests--;
}