<?php

require_once 'helpers/functions.php';

// Case insenstive

$pat = '/I Love PHP/i';

$str_1 = 'I Love php';
$str_2 = 'I love PHP';
$str_3 = 'I Love PHP and JavaScript';


// dump($pat);

dump(preg_match($pat , $str_1));
dump(preg_match($pat , $str_2));
dump(preg_match($pat , $str_3));

// dump($pat == $str_1);
// dump($pat == $str_2);
// dump($pat == $str_3);