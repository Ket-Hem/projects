<?php

// масив для перебору
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// функція генератор
function collect ($arr, $callback)
{
    foreach ($arr as $value) {
        // перевіряє чи значення НЕ є парним
        if ($value % 2 !== 0) {
            yield $callback($value);
        }
    }
}

//змінна в якій накопичуються значення що пройшли фільтрацію
//функції collect переданй масив $arr і анонімна функція
$collect = collect($arr, function ($e) {
    return $e * $e;
});

//виводить всі значення масиву
foreach ($collect as $val) echo "$val<br/>";