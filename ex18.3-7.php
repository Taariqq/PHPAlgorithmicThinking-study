<?php

/*
 * prompt for grades b/w A and F, and then display the corresponding
 * percentage
 */

echo 'please enter a grade b/w A and F : ';
$grade = trim(fgets(STDIN));

if ($grade == "A") {
  echo "For grade A the percentage is between 90 - 100 \n";
} elseif ($grade == "B") {
  echo "For grade B the percentage is between 80 - 89 \n";
} elseif ($grade == "C") {
  echo "For grade C the percentage is between 70 - 79 \n";
} elseif ($grade == "D") {
  echo "For grade D the percentage is between 60 - 69 \n";
} else {
  echo "For grades E/F the percentage is between 0 - 59 \n";
}