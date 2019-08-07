<?php

/*
 * prompt for miles traveled, and then calculates and displays how
 * many miles are left until the next service, as well as the type
 * of the next service.
 */

echo 'please enter the miles traveled so far : ';
$miles = trim(fgets(STDIN));

if ($miles <= 6000) {
  $miles_left = 6000 - $miles;
  echo "you have $miles_left left before a minor service at"
  . " 6000 miles.\n";
} elseif ($miles > 6000 && $miles <= 12000) {
  $miles_left = 12000 - $miles;
  echo "you have $miles_left miles left before a major service.\n";
} elseif ($miles > 12000) {
  $miles_left = 18000 - $miles;
  echo "you have $miles_left miles left before a major service.\n";
}