<?php
ini_set('error_reporting', E_ERROR | E_PARSE);

for(;$i<20;$i++){$r[$i][0]=1;$r[$i][$i]=1;for($c=1;$c<count($r)-1;$c++)$r[$i][$c]=$r[$i-1][$c-1]+$r[$i-1][$c];for($c=0;$c<count($r);$c++)echo $r[$i][$c],' ';echo"
";}

;