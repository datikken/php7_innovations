<?php

$a = 100;
$b = 200;

switch ($a <=> $b) {
    case -1:
        echo '$a is less than $b';
        break;
    case 0:
        echo '$a is equal to $b';
        break;
    case 1:
        echo '$a is greater than $b';
        break;
}

echo '<br/>';

$watches = array(
    array('brand' => 'Swatch', 'price' => 50.0),
    array('brand' => 'Timex', 'price' => 5.0),
    array('brand' => 'Rolex', 'price' => 500.0)
);

function sort_by_price($watch1, $watch2)
{
    return $watch1['price'] <=> $watch2['price'];
}

#sort by price in ascending order
usort($watches, 'sort_by_price');
var_dump($watches);