<?php

$arr = [-2, 1, 3, -4, 5];
$sumSub = [];
$sumSub2 = [];
$a = [];
$max = [];

function rang($k)
{
    global $arr;
    global $sub;
    global $sumSub;
    for ($p = count($arr); $p > $k + 2; $p -= 2) {
        for ($i = $k; $i < $p; $i++) {
            $sub[] = $arr[$i];
            $i++;
        }
        $sumSub[] = $sub;
        $sub = [];
    }
    return $sumSub;
}

function double()
{
    global $arr;
    global $sub;
    global $sumSub2;
    for ($j = count($arr) - 1; $j > 1; $j--) {
        for ($i = 0; $i < $j - 1; $i++) {
            $sub[] = [$arr[$i], $arr[$j]];
        }
        $sumSub2[] = $sub;
        $sub = [];
    }
    return $sumSub2;
}

for ($k = 0; $k < count($arr) - 2; $k++) {
    rang($k);
}

$sumSub2 = double();

foreach ($sumSub as $key => $val) {
    $a[] = implode(', ', $val);
    foreach ($sumSub2 as $key2 => $val2) {
        if (is_array($val2)) {
            foreach ($val2 as $key3) {
                $a[] = implode(', ', $key3);
            }
        }
    }
}
$sub = array_values(array_unique($a));


echo '<pre>';
echo 'MAIN SET:';
echo '[' . implode(', ', $arr) . ']';
echo '<hr>';
echo 'SUBSETS';
echo '<hr>';

foreach ($sub as $key) {
    echo 'SUM = ';
    echo '(';
    print_r(array_sum(explode(', ', $key)));
    echo ')';
    echo '   ' . '[' . $key . ']';
    echo '<br>';
    $max[$key] = array_sum(explode(', ', $key));

    if (count($max) === count($sub)) {
        echo '<br>';
        echo 'MAX SUM: ';
        echo max($max);
        echo '<br>';

        $set = array_flip($max);
        echo 'SUBSET: ';
        echo '[' . $set[max($max)] . ']';
    }
}
echo '</pre>';

?>