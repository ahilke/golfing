<?php

for ($i = 1; $i <= 100; $i++) {
    for ($c = 1; $c <= $i; $c++) {
        if ($i % $c === 0) {
            echo $c . ' ';
        }
    }
    echo "\n";
}
