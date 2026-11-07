<?php

require_once 'helpers/functions.php';

// check if the string has  

$pat = '/^[0-9]{2}[a-z]{3}/';
 

$str_1 = 'My Name is maged yaseen';
$str_2 = '+-*/_)*&^';
$str_3 = 'a90';
$str_4 = '520app';
$str_5 = '20apphfdsjhr07rroi&*Y)#FUOho';


// dump($pat);

dump(preg_match($pat , $str_1));
dump(preg_match($pat , $str_2));
dump(preg_match($pat , $str_3));
dump(preg_match($pat , $str_4));
dump(preg_match($pat , $str_5));

// dump($pat == $str_1);
// dump($pat == $str_2);
// dump($pat == $str_3);