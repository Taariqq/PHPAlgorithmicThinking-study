<?php
/*
 * prompt for 3 temperature values (F), at three different points
 * in NY, and then displays the message "Heat Wave" if the average
 * value is greater than 60 Fahrenheit.
 */

echo 'please enter three temperature values in F :';
$fahr1 = trim(fgets(STDIN));
$fahr2 = trim(fgets(STDIN));
$fahr3 = trim(fgets(STDIN));

$avgTemp = (($fahr1 + $fahr2 + $fahr3) / 3);

if ($avgTemp > 60) {
  echo "Heat Wave! \n";
}

echo "the entered values were $fahr1, $fahr2, $fahr3 respectively,"
  . "with the average being $avgTemp";