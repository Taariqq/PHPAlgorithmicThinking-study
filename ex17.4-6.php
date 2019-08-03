<?php

/*
 * prompt for an integer, and then display a message indicating
 * whether or not the given number is a multiple of 4.
 * Moreover, the PHP script should display the structure of the
 * given int, including the given integer, the quotient, and any
 * remainder.
 * e.g. if the given int is 14, the message 
 * "14 = 3 x 4 + 2" should be displayed.
 */

echo 'please enter an integer : ';
$x4 = trim(fgets(STDIN));

if ($x4 % 4 == 0) {
  echo "the number is a multiple of 4 \n";
}

$remainder = $x4 % 4;

# how do I print the - 3 x 4 - part?
# $x4 / 4

echo "$x4 = ". intval($x4 / 4)." x 4 + $remainder";