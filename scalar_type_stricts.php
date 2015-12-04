<?php
declare(strict_types=1);

function sumOfInts(int ...$ints){
    return array_sum($ints);
}

sumOfInts(2, '3', 4.1);

?>
