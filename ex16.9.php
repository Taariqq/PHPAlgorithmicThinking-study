<?php
/*
 * prompt user for a string and then display msg "Many characters"
 * when the given string contains more than 20 characters.
 * Hint: use strlen()
 */

echo 'please enter a string :';
$longString = trim(fgets(STDIN));

if (strlen($longString) >= 20 ) {
  echo "Many characters \n";
}

echo "the given string was $longString";