<?php
declare(strict_types=1);

const INSTRUCTOR = 'Maged';

$onsite = [ 'Marleen', 'Youssef' , 'Nour' , 'Michael' , 'Ahmed' ];

$online = [ 'Momen', 'Amr', 'Farid' ];

var_dump($onsite);

var_dump($onsite[2]);

var_dump(count($onsite));

echo '--------------------------';
echo"<hr>";

for ($i = 0 ; $i < count($onsite) ; $i++) {
    print_r($onsite[$i]);
}

echo '--------------------------';