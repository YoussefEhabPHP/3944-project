<?php
declare(strict_types=1);

// Loops (While do loop)

$i = 100; 

while( $i <= 10 ) { 
    var_dump ("Inside For Loop i = $i"); 

    if (false) {
        $i += 2;
    } else {
        $i += 3;
    }
}

var_dump($i);