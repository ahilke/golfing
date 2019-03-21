<?php
ini_set('error_reporting', E_ERROR | E_PARSE);

function p($r,$c){return $c==1||$c==$r?1:p(--$r,$c)+p($r,--$c);}for($r=1;$c++<$r||$r++<19+$c=print"
";)echo p($r,$c),' ';

;