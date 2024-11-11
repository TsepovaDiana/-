<?php
function firstNumber(int $a)
{
  $str = (string)$a;
  if (strlen($str) > 0)
  {
  $arr = str_split($str);
  $number = $arr[0];
  echo "Первая цифра числа $a это $number ";
  }
  else {echo "Число не введено" ;}
}
firstNumber(5676);