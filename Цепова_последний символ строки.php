<?php
function getLastCharacter(string $str): string 
{
  if (mb_strlen($str) === 0) { return "";}
  return mb_substr($str, -1);
}
echo getLastCharacter("Привет, мир!");