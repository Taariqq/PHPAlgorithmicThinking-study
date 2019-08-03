<?php

/*
 * prompt for two numbers & determine and display the greater
 * of the two numbers
 */

echo 'please enter number A :';
$A = trim(fgets(STDIN));
echo 'please enter number B :';
$B = trim(fgets(STDIN));

if ($A > $B) {
  echo "$A \n";
} else {
  echo "$B \n";
}

echo "The entered numbers in sequence were A = $A & B = $B";