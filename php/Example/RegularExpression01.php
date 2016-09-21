<?php

/* use regular expression to replace date */
$string = '08/14/2012';
$pattern = '/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/';
$replacement = '$3-$1-$2';
echo preg_replace($pattern, $replacement, $string);
