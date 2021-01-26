<?php
declare(strict_types=1);

#Array
#String
#Float
#Int
##Bool

function sum($a, $b):int
{
    return $a + $b;
}

echo gettype(sum(2,3));
echo '<br/>';
echo gettype(sum('2', '3'));
#Fatal error: Uncaught TypeError: Return value of sum() must be of the type int, float returned
echo gettype(sum(2.0, 3.0));