<?php
/*
 * prompt for a string and then display "Uppercase" when the given
 * string contains only uppercase characters
 * using ctype_upper();
 */

echo 'please enter a string of characters :';
$stringB = trim(fgets(STDIN));

if (ctype_upper($stringB)) {
  echo "Uppercase \n";
}

echo "the provided string was $stringB";