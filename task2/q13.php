<?php
$string_one = "Eraa";
$string_two = "Soft";

$Full_string = $string_one . $string_two;
$comparison = strcmp($Full_string, "EraaSoft");

if ($comparison === 0) {
    echo "The Full_string matches 'EraaSoft'.";
} else {
    echo "The Full_string does not match 'EraaSoft'.";
}

?>