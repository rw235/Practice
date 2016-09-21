<?php

/* use regular expression to replace date string */
$subject = "banana, apple, orange, melon are my favorite fruits. ";
$patterns = array();
$patterns[0] = '/banana/';
$patterns[1] = '/apple/';
$patterns[2] = '/orange/';
$patterns[3] = '/melon/';
$replacements = array(); 
$replacements[0] = 'no2'; 
$replacements[1] = 'no1'; 
$replacements[2] = 'no3'; 
$replacements[3] = 'no5'; 

echo preg_replace($patterns, $replacements, $subject);