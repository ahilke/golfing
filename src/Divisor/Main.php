<?php

while ($i++ < 100) {
    $c=0;
    while ($c++ < $i)
        $i % $c || print"$c "; // print $c if $i is a divisor
    echo "\n";
}
