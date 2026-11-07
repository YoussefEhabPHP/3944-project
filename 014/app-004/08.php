<?php

require_once 'helpers/functions.php';

// check if the string has letter or symbols

$pat = '/[\W]/';
 

$str_1 = 'My Name is maged yaseen';
$str_2 = '+-*/_)*&^';
$str_3 = '98678988';
$str_4 = ' ';


// dump($pat);

dump(preg_match($pat , $str_1));
dump(preg_match($pat , $str_2));
dump(preg_match($pat , $str_3));
dump(preg_match($pat , $str_4));

// dump($pat == $str_1);
// dump($pat == $str_2);
// dump($pat == $str_3);