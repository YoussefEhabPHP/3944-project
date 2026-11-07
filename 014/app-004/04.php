<?php

require_once 'helpers/functions.php';

// Find any letter between [] + case insenstive

$pat = '/[maged]/i';

$str_1 = 'My Name is maged yaseen';
$str_2 = 'His Doctor is sick';
$str_3 = ' my doctor is absent';


// dump($pat);

dump(preg_match($pat , $str_1));
dump(preg_match($pat , $str_2));
dump(preg_match($pat , $str_3));

// dump($pat == $str_1);
// dump($pat == $str_2);
// dump($pat == $str_3);