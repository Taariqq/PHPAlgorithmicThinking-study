<?php

/*
 * prompt to enter total number of CDs purchased per month, and then
 * display the number of points awarded.
 */

echo 'Please let us know how many CDs have you wasted your '
 . 'money on last month : ';
$numCDs = trim(fgets(STDIN));

switch ($numCDs) {
  case 1:
    echo 'You were awarded 3 bonus points.';
    break;
  case 2:
    echo 'You were awarded 10 bonus points.';
    break;
  case 3:
    echo 'You were awarded 20 bonus points.';
    break;
  case 4:
    echo 'You were awarded 45 bonus points.';
    break;
  default:
    echo '45 bonus points is the maximum the store can award.';
    break;
}