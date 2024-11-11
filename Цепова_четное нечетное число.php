<?php
function ChetNechet($a)
{
	if ($a % 2 == 0) 
{
    echo "$a - Число четное\n";
} else 
{
    echo "$a - Число нечетное\n";
}
}
ChetNechet(10);
ChetNechet(7);