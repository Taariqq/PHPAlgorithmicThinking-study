<?php
/*
 * prompt for two sides of right-triangle and then calculate
 * the hypotenuse, using the Pythagorean theorem.
 * Formula: hypotenuse = sqrt(pow(A, 2) + pow(B, 2))
 */
echo 'please enter value of A side of right triangle : ';
$A = trim(fgets(STDIN));
echo 'please enter value of B side of right triangle : ';
$B = trim(fgets(STDIN));

$hypotenuse = sqrt(pow($A, 2) + pow($B, 2));

echo "Given the side A of $A and side B of $B, the "
  . "hypotenuse of a right triangle is $hypotenuse";

