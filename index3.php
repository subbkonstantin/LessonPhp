<?php

//1. task
$a = 1;
while ($a < 100) {
    if ($a % 3 == 0) {
        echo $a++.'<br>';
    }
    $a++;
}
//2. task
$a = 0;
do {
    if ($a == 0) {
        echo $a . '  это ноль' . '<br>';
        $a++;
    } else if ($a % 2 == 0) {
        echo $a . '  четное число' . '<br>';
        $a++;
    } else {
        echo $a . '  нечетное число' . '<br>';
        $a++;
    }
} while ($a <= 10);
//3. task
$myArray = [
    "Московская область:" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область:" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область:" => ["Рязань", "Касимов", "Скопин"]
];
foreach ($myArray as $my_key => $my_value) {
   echo("$my_key is $my_value <br/>");
}
//5. task
function changeSpace($string)
{
    if (!is_string($string)) {
        return "incorrect argument {$string}";
    }

    return change('/\s/', '_', $string);
}
//7. task
for ($i=0; $i <10 ; print $i++."<br>") { }


?>