<?php

// Create an array of pandas.
$Names = [
    'firstName'     => ['Jerod' , 'Lori', 'Aedan', 'Alaina'],
    'middleName'    => ['L.', 'B.', 'L.', 'J.'],
    'lastName'     => ['West','West','West','West']
];

// Iterate our names array.
foreach ($Names as $name ) {
    echo "{$name[0]}";
    

}