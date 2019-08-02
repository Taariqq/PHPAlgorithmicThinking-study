<?php
/*
 * prompt for 4 numbers and if one of them is negative display
 * the message "Among the given numbers, there is a negative one!"
 */

echo 'please enter 4 numbers :';
$num1 = trim(fgets(STDIN));
$num2 = trim(fgets(STDIN));
$num3 = trim(fgets(STDIN));
$num4 = trim(fgets(STDIN));

if ($num1 < 0 || $num2 < 0 || $num3 < 0 || $num4 < 0) {
  echo 'Amongst the given numbers there is a negative one!'."\n";
}

echo "The entered numbers were $num1 $num2 $num3 $num4";