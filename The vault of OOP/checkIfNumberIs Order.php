<?php
function checkIfNumberIsOrder ()
{
    $lst = array();
    for ($i = 2; $i < 100; $i++) {
        if ($i % 2 == 1) {
            $lst[] = $i;
        }
    }
    $lst2 = [];
    foreach ($lst as $item) {
        if ($item % 3 != 0) {
            $lst2[] = $item;
        }
    }
    array_unshift($lst2, '1', '2', '3');
    foreach ($lst2 as $list) {
        echo $list . '</br>';
    }
}