<?php
function okrugl($array) 
{
    return array_map('round', $array);
}

$chisla = [1.2, 3.5, 4.8];
$numbers = okrugl($chisla);
print_r($numbers);