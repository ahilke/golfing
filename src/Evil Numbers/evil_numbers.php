<?php

$i = -1;
while ($i++ < 50) {
    $binary = decbin($i);
    $chars = count_chars($binary);
    if ($chars[49] % 2 === 0) {
        echo "$i\n";
    }
}
