<?php

/*
 * prompt for choice (1, 2 or 3) and a distance in miles, for
 * a - convert Miles to Yards
 * b - convert Miles to Feet
 * c - convert Miles to Inches
 * then calculate and display the required value.
 * 1 mile = 1760 yd
 * 1 mile = 5280 feet
 * 1 mile = 63360 inches
 */

echo "1. Convert Miles to Yards : \n"
 . "2. Convert Miles to Feet : \n"
 . "3. Convert Miles to Inches : \n";

echo 'Please enter your choice : ';
$choice = trim(fgets(STDIN));

if ($choice < 1 || $choice > 3) {
  echo 'Please enter a valid choice between 1 and 3.';
  exit();
}

echo 'please enter distance in Miles : ';
$miles = trim(fgets(STDIN));

switch ($choice) {
  case 1:
    $yards = $miles * 1760;
    echo "$miles miles in $yards yards.";
    break;
  case 2:
    $feet = $miles * 5280;
    echo "$miles miles is $feet feet.";
    break;
  case 3:
    $inches = $miles * 63360;
    echo "$miles miles is $inches inches.";
    break;
  default:
    echo 'Make sure you enter a valid choice!';
    break;
}