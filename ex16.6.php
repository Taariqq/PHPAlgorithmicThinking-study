<?php
/*
 * prompt for two numbers and then display "positive" when 
 * both numbers are positive
 */
echo 'please enter two numbers :';
$numA = trim(fgets(STDIN));
$numB = trim(fgets(STDIN));

if ($numA > 0 && $numB > 0) {
  echo "Positive\n";
}

echo "The provided numbers are $numA and $numB";