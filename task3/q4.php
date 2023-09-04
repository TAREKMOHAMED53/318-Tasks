<?php
function calculateFactorial($number) {
    $factorial = 1;
    $factorialExpression = '';

    for ($i = $number; $i >= 1; $i--) {
        $factorial *= $i;
        $factorialExpression .= $i;
        if ($i > 1) {
            $factorialExpression .= '*';
        }
    }

    $result = "The factorial of $number is $factorialExpression = $factorial";
    return $result;
}

$number = 5;
$factorialOutput = calculateFactorial($number);

echo $factorialOutput;
?>

