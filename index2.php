
<?php

//1. task

$a = 10;
$b = 27;
$addition = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;

if ($a >= 0 && $b >= 0) {
    echo $subtraction;
}
elseif ($a < 0 && $b < 0) {
    echo $multiplication;
}
elseif (($a * $b) < 0) {
    echo $addition;
}
else {
    echo "Error";
}

//2.task

function doIncrease ($a) {
    echo $a;
    if ($a==15) {
        return;
    }
    doIncrease ($a+1);
}
doIncrease(rand(0,15));

//3.task

function sum ($arg1,$arg2) {
    $operation = $arg1 + $arg2;
    echo $operation;
    return $operation;
}
sum (12,2);

function sum ($arg1,$arg2) {
    $operation = $arg1 - $arg2;
    echo $operation;
    return $operation;
}
sum (5,2);

function sum ($arg1,$arg2) {
    $operation = $arg1 / $arg2;
    echo $operation;
    return $operation;
}
sum (8,2);

function sum ($arg1,$arg2) {
    $operation = $arg1 * $arg2;
    echo $operation;
    return $operation;
}
sum (6,2);

//4.task

mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            $operation = $arg1 + $arg2;
            echo $operation;
            return $operation;
            break;
        case "-":
            $operation = $arg1 - $arg2;
            echo $operation;
            return $operation;
            break;
        case "/":
            $operation = $arg1 / $arg2;
            echo $operation;
            return $operation;
            break;
        case "*":
            $operation = $arg1 * $arg2;
            echo $operation;
            return $operation;
            break;
        default:
            echo "error";
            break;
    }
}

?>