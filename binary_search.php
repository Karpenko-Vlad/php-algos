<?php

$sortedArray = range(10, 1001);

$target = rand(10, 2000);

echo "Searching for: $target\n";

$index = binarySearch($sortedArray, $target);

if (is_null($index)) {
    echo "Target not found\n";
} else {
    echo "Element position: $index\n";
}

function binarySearch($array, $value) {
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $middle = floor(($low + $high) / 2);

        if ($array[$middle] === $value) {
            return $middle;
        }

        if ($array[$middle] > $value) {
            $high = --$middle;
        } else {
            $low = ++$middle;
        }
    }

    return null;
}

