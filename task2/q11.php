<?php
$sentence = "EraaSoft Learn by practice";
$wordToRemove = "by";

$modifiedSentence = str_replace($wordToRemove, '', $sentence);

echo "Original sentence : " . $sentence . "<br>";

echo "Sentence after update : " . $modifiedSentence;

?>