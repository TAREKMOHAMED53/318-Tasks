<?php
function yearsToDays($years) {
    $days = $years * 365; 
    return $days;
}

$ageInYears = 21; 

$ageInDays = yearsToDays($ageInYears);

echo "$ageInYears years is equal to $ageInDays days.";
?>

