<?php
function checkNumber($number) 
{
  if ($number < 0) 
  {
    echo "$number - отрицательное число.\n";
  } 
  else 
  {
    echo "$number - неотрицательное число.\n";
  }
}
checkNumber(-5);
checkNumber(10);