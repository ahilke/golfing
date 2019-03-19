<?php
for(;$i++<100;$o=null,$i%3||$o='Fizz',$i%5||$o.='Buzz',print($o??$i)."
")
;