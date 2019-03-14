<?php

$i = -1;
while ($i++ < 50) {
    $hex = decbin($i);
    $hexArray = count_chars($hex);
    if ($hexArray[49] % 2 === 0) {
        echo "$i\n";
    }
}
