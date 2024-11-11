<?php
function trimoradd(array $strings, string $letter): array 
{
    foreach ($strings as &$string) 
    {
        if (strlen($string) >= 5) 
        {
            $string = substr($string, 0, 5);
        } 
        else 
        {
            $string .= $letter;
        }
    }
    return $strings;
}
$array = ["Hello", "world", "example", "yes", "no"];
$letterToAdd = "o";
$resultArray = trimoradd($array, $letterToAdd);
print_r($resultArray);