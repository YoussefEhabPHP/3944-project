<?php

require_once 'helpers/functions.php';

// check if the string has any digit (number)

// $pat = '/[0-9]/';
$pat = '/[\d]/'; // \d = digit (any number)

$str_1 = 'My Name is maged yaseen';
$str_2 = '0780973798(*^*#KJHJK';
$str_3 = '98678988';


// dump($pat);

dump(preg_match($pat , $str_1));
dump(preg_match($pat , $str_2));
dump(preg_match($pat , $str_3));

// dump($pat == $str_1);
// dump($pat == $str_2);
// dump($pat == $str_3);