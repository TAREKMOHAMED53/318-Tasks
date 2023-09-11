<?php
function findSecondLargest($numbers) {
    if (count($numbers) < 2) {
        return "Array does not have a second largest number";
    }

    $largest = $secondLargest = PHP_INT_MIN;

    foreach ($numbers as $number) {
        if ($number > $largest) {
            $secondLargest = $largest;
            $largest = $number;
        } elseif ($number > $secondLargest && $number != $largest) {
            $secondLargest = $number;
        }
    }

    return $secondLargest;
}

$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$secondLargest = findSecondLargest($numbers);

echo $secondLargest ;

?>