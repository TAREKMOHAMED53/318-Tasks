<?php
$array = [1, 10, 5, 2, 11];

$x = 3;

$greaterCount = 0;
$smallerCount = 0;

foreach ($array as $number) {
    if ($number >= $x) {
        $greaterCount++;
    } else {
        $smallerCount++;
    }
}

echo "Numbers Smaller than ($x) = $smallerCount";
echo"<br>";
echo "Numbers Greater than or Equal to ($x) = $greaterCount";
?>
