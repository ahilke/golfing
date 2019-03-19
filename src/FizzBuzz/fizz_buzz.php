<?php
for ($i = 0; $i < 100; $i++) {
    $out = null;
    if ($i % 3 === 0) {
        $out = 'Fizz';
    }
    if ($i % 5 === 0) {
        $out .= 'Buzz';
    }
    $out = $out ?? $i;
    echo "$out\n";
}
;