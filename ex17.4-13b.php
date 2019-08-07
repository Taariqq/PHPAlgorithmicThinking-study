<?php

/*
 * prompt for miles traveled, and then calculates and displays how
 * many miles are left until the next service, as well as the type
 * of the next service.
 * 2nd try ...
 */

echo 'please enter the miles traveled so far : ';
$miles = trim(fgets(STDIN));

// for minor service
# $minor = $miles + 6000;
// for major service
# $major = $miles + 12000;

if ($miles <= 6000) {
  $left = 6000 - $miles;
  echo "you have $left miles left before a minor service.\n";
} elseif ($miles > 6000) {
  if ($miles > 6000 && $miles <= 12000) {
    $left = 12000 - $miles;
    echo "you have $left miles left before a major service.\n";
  }
  
}