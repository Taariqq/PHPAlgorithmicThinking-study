<?php
/*
 * prompt to enter a value (any value) and then display
 * the message "Numeric" when the given value is a numbric value
 */

echo 'please enter a value (any alphanumeric value) :';
$alphaNumeric = trim(fgets(STDIN));

if (is_numeric($alphaNumeric)) {
  echo "Numeric\n";
}

echo "The provided value was $alphaNumeric";