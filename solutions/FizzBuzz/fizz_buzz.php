<?php
ini_set('error_reporting', E_ERROR | E_PARSE);

for(;$i++<100;$o=$u,$i%3||$o='Fizz',$i%5||$o.='Buzz',print($o??$i)."
")

;