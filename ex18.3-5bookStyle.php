<?php

/*
 * prompt for months b/w 1 & 12, and then display the corresponding
 * season.
 */
echo 'please enter the month b/w 1 - 12 : ';
$month = trim(fgets(STDIN));

if ($month == 12 || $month <= 2) {
  echo "Still short days out. Winter!";
} elseif ($month <= 5) {
echo "Spring time.";
}elseif ($month <= 8) {
  echo "Finally! Summer of 69.";
}elseif ($month <= 11) {
  echo 'Fall, the most beautiful part of the year in New England.';
}

