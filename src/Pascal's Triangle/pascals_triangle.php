<?php

function pascalNumber(int $row, int $column): int {
    if ($column === 1) {
        return 1;
    }
    if ($column === $row) {
        return 1;
    }
    return pascalNumber($row - 1, $column - 1) + pascalNumber($row - 1, $column);
}

for ($r = 1; $r <= 20; $r++) {
    for ($c = 1; $c <= $r; $c++) {
        echo pascalNumber($r, $c),' ';        
    }
    echo "\n";
}
