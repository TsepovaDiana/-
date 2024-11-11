<?php
function SovpadenieBukv(string $word1, string $word2)
{
	$a = str_split($word1);
	$b = str_split($word2);
	$char1 = $a[0];
	$char2 = $b[0];
	if ($char1 == $char2) 
	{ echo "Первые буквы совпадают\n";} 
    else { echo "Первые буквы не совпадают\n";}
}
SovpadenieBukv("Hello", "Bye");
SovpadenieBukv("Net", "No");