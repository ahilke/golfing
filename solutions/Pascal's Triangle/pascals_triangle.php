<?php
ini_set('error_reporting', E_ERROR | E_PARSE);

function p($r,$c){if($c==1)return 1;if($c==$r)return 1;return p(--$r,$c)+p($r,--$c);}for($r=1;$c++<$r||$r++<19+$c=print"
";)echo p($r, $c),' ';

;