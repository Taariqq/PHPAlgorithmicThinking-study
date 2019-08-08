<?php

/*
 * prompt for days 1 - 7, and then print days of the week
 * corresponding to the number.
 */

echo 'please enter a number (1 - 7) for the day of the week : ';
$weekDay = trim(fgets(STDIN));

switch ($weekDay) {
  case 1:
    echo 'Sunday';
    break;
  case 2:
    echo 'Monday';
    break;
  case 3:
    echo 'Tuesday';
    break;
  case 4:
    echo 'Wednesday';
    break;
  case 5:
    echo 'Thursday';
    break;
  case 6:
    echo 'Friday';
    break;
  case 7:
    echo 'Saturday';
    break;
  default:
    echo "you must've entered a number other than 1 - 7.";
    break;
}