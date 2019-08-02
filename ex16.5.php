<?php
/*
 * prompt for a number and display a msg "positive" 
 * when the number is positive
 */

echo 'please enter a number : ';
$a = trim(fgets(STDIN));

if ($a > 0) {
  echo 'Positive'."\n";
}

echo "The number provided is $a";