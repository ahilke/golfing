<?php

$i = -1;
while ($i++ < 50) {
    $hex = decbin($i);
    $chars = count_chars($hex);
    if ($chars[49] % 2 === 0) {
        echo "$i\n";
    }
}
