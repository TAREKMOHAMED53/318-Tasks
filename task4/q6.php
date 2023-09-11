<?php
function moveZerosToEnd(&$nums) {
    $nonZeroCount = 0;
    $n = count($nums);

    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] != 0) {

            $temp = $nums[$nonZeroCount];
            $nums[$nonZeroCount] = $nums[$i];
            $nums[$i] = $temp;
            $nonZeroCount++;
        }
    }
}

$nums = [0, 1, 0, 3, 12];

moveZerosToEnd($nums);

echo "nums = [" . implode(', ', $nums) . "]";
?>
