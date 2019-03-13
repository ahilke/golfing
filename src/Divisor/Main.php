<?php

while ($i < 100) {
    $i++;
    $c=0;
    while ($c < $i) {
        $c++;
        if ($i % $c === 0) {
            echo $c . ' ';
        }
    }
    echo "\n";
}
