<?php
$array = [1, 10, 5, 2, 11];

$largest = $array[0];
$smallest = $array[0];

foreach ($array as $number) {
    if ($number > $largest) {
        $largest = $number;
    }
    if ($number < $smallest) {
        $smallest = $number;
    }
}

echo "Largest number is: $largest";
echo"<br>";
echo "Smallest number is: $smallest";
?>
