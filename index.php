<?php

/*
 * Complete the 'sockMerchant' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY ar
 */

function sockMerchant($n, $ar) {
    // Write your code here
    $pairs = 0;
    $unique = array_unique($ar);
    $counts = array_count_values($ar);
    foreach($unique as $color )
    {
        $count_color = $counts[$color];
        if($count_color > 1)
        $pairs += floor($count_color / 2);
    }
    return $pairs;
}
