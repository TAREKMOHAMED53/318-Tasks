<?php
$sentence = "EraaSoft Learn by practice";
$wordToCheck = "by";

if (strpos($sentence, $wordToCheck) !== false) {
    echo "The word '$wordToCheck' exists in the sentence.";
} else {
    echo "The word '$wordToCheck' does not exist in the sentence.";
}
?>
