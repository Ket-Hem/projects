<?php
function generator ($begin = 0, $end = 100)
{
    for ($i = $begin; $i < $end; $i++ ) {
        echo "Value = {$i} <br/>"   ;
        yield $i;
    }
}
foreach (generator() as $value) {
    echo "Square root of value is: ".pow($value,2)."<br/>";
    if ($value >= 5) break;
}

