<?php
ini_set('error_reporting', E_ERROR | E_PARSE);

for(;$i++<100;print(($i%3?'':Fizz).($i%5?'':Buzz)?:$i)."
")

;