<?php

$rows = [];
for ($i = 0; $i < 20; $i++) {
    $rows[$i][0] = 1;
    $rows[$i][$i] = 1;
    for ($c = 1; $c < count($rows) - 1; $c++) {
        $rows[$i][$c] = $rows[$i-1][$c-1] + $rows[$i-1][$c];
    }
    for ($c = 0; $c < count($rows); $c++) {
        echo $rows[$i][$c],' ';
    }
    echo "\n";
}
