<?php

//formul = ((son_terim + ilk_terim)*(son_terim - ilk_terim + artış_miktarı))/2*artış_miktarı

function sum($a, $b, $x = 1)
{
    $start = ceil($a / $x);
    $end = floor($b / $x);

    $sum = ((($end + $start) * ($end - $start + 1)) / 2) * $x;
    return $sum;
}

echo 'SUM: ';
echo sum(2, 10, 4);

?>