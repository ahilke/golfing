<?php
ini_set('error_reporting', E_ERROR | E_PARSE);

for(;$i++<50;count_chars(decbin($i))[49]%2&&print"$i
")

;