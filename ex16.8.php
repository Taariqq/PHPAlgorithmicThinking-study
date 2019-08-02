<?php
/*
 * prompt for a string and then display "Uppercase" when the given
 * string contains only uppercase characters
 * Hint: use strtoupper()
 */
echo 'please enter a string of characters :';
$string = trim(fgets(STDIN));

if (strtoupper($string) == $string) {
  echo "Uppercase\n";
}

echo "the provided string was $string";