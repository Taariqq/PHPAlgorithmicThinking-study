<?php

/*
 * a car starts from rest and moves with a constant acceleration along a straight
 * line. Write a script that prompts the user to enter the acceleration and the
 * distance the car traveled and then calculates the time travelled.
 * Formuls : S = u + 0.5 * a * t * t
 */

$u = 0; // car starting from rest
echo 'please enter the value for acceleration : ';
$a = trim(fgets(STDIN));
echo 'please enter the distance the vehicle travelled : ';
$S = trim(fgets(STDIN));
/*
 * so the formula would be 
 *    S = 0 + (1/2) * a * t(sq)
 * => S * 2 = a * t(sq)
 * => (S * 2) / a = t(sq)
 * => t(sq) = (S * 2) / a
 * => t = pow((S * 2) / a, 0.5)
 */

$t = pow(($S * 2) / $a, 0.5);
// $t = sqrt(2 * $S / $a); is the same thing (in fact the correct one)

echo "given the acceleration value of $a and "
  . "the distance of $S, the total time traveled is $t sec";