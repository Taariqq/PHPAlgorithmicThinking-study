<?php
/*
 * turn a number into an absolute number using 
 * single-alternative decision structure
 */

echo 'please enter a number : ';
$num = trim(fgets(STDIN));

if ($num < 0) {
  $num = $num * (- 1);
}
  
echo $num;
echo "\n the modulus of -2 % 2 is .. ";
echo (-2 % 2);