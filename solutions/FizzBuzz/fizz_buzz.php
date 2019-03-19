<?php
for(;$i++<100;){$o=null;if($i%3==0)$o='Fizz';if($i%5==0)$o.='Buzz';echo($o??$i)."\n";}
;