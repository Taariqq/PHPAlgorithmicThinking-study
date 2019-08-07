<?php

/*
 * prompt for months b/w 1 & 12, and then display the corresponding
 * season.
 */
echo 'please enter the number of the month, b/w 1 and 12 : ';
$month = trim(fgets(STDIN));

if ($month == 12 || $month == 1 || $month == 2) {
  echo "It is winter time! \n";
} elseif ($month >= 3 && $month <= 5) {
  echo "Spring is here! \n";
} elseif ($month >= 6 && $month <= 8) {
  echo "Summer time, time to enjoy the outdoors! \n";
} elseif ($month >= 9 && $month <= 11) {
echo "Enjoy the beautiful color of Fall!";
}

/*
 * the author of the book writes a smarter algorithm, since
 * other months are already elimenated above! Nice!
 */