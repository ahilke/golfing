<?php

$i = -1;
while ($i++ < 50) {
    $hex = decbin($i);
    $hexArray = str_split($hex);
    $oneCount = array_sum($hexArray);
    if ($oneCount % 2 === 0) {
        echo "$i\n";
    }
}
