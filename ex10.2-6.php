<?php
/* a car starts from rest and moves with a constant acceleration
along a straight horizontal road for a given time in seconds.
Write a PHP script that prompts the user to enter the acceleration
(in m/sec * sec) and the time traveled (in sec) and then calculates
the distance traveled. The required formula is 
S = u + 1/2 a * t * t
*/

$u = 0; // starting from rest
echo 'Please enter your acceleration rate : ';
$acceleration = trim(fgets(STDIN));

echo 'Please enter the total time you have traveled : ';
$timeTraveled = trim(fgets(STDIN));

$S = $u + 0.5 * $acceleration * $timeTraveled * $timeTraveled;

echo "You traveled $S meters given your acceleration of 
$acceleration from rest and the total time traveled of $timeTraveled";