<?php

/*
 * prompt for an integer, and then display a message indicating
 * whether or not the given integer is a four-digit integer.
 * Hint: 4 digit integers are between 1000 and 9999.
 */

echo 'please enter an integer : ';
$fourDigitNum = trim(fgets(STDIN));

if ($fourDigitNum >= 1000 && $fourDigitNum <= 9999) {
  echo 'the entered number is a four-digit integer'."\n";
} else {
echo "$fourDigitNum is not a 4 digit number \n";
}

echo "the entered number is $fourDigitNum";
