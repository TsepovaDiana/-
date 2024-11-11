<?php
function stringLength(string $str): int 
{
  return mb_strlen($str);
}
echo stringLength("Привет, мир!");