<?php

/*
 * Two cars start from rest and move with a constant acceleration 
 * along a straight horizontal road for a given time. Write a PHP
 * script that prompts the user to enter the time the two cars
 * travelled (same for both cars) and the acceleration for each one
 * of them, and then calculates and displays the distance between 
 * them as well as a message "Car A first" or "Car B first"
 * depending on which car is leading the race.
 * The required formuls is ...
 * S =(1/2) * a * t * t
 * --Note-- Book solution not accurate
 */

echo 'please enter time traveled by cars : ';
$time = trim(fgets(STDIN));
echo 'please enter the acceleration of car A : ';
$accelerationA = trim(fgets(STDIN));
echo 'please enter the acceleration of car B : ';
$accelerationB = trim(fgets(STDIN));

$distanceA = (1 / 2) * $accelerationA * pow($time, 2);
$distanceB = (1 / 2) * $accelerationB * pow($time, 2);

if ($distanceA > $distanceB) {
  $distanceBetween = $distanceA - $distanceB;
  echo "the distance between the cars was $distanceBetween"
  . " with Car A being first";
} else {
  $distanceBetween = $distanceB - $distanceA;
  echo "the distance between the cars was $distanceBetween"
    . " with Car B being first";
}