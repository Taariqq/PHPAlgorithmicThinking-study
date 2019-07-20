<?php
/* A car starts from rest and moves with a constant acceleration along a straight horizontal road for a given time. Write a PHP script that prompts the user to enter the acceleration and the time the car traveled, and then calculates and displays the distance traveled. 
 * The formula is
 * S = u + 0.5 (a * t * t)
 */

echo 'enter the acceleration speed : ';
$a = trim(fgets(STDIN));
echo 'enter total time traveled : ';
$t = trim(fgets(STDIN));

$u = 0; // initial velocity (starting from rest)

$S = $u + 0.5 * ($a * ($t * $t));

echo"You traveled a total distance of $S given the acceleration"
    . "of $a in a total time of $t";