<?php

/*
 * maybe because I was tired, but this solution did NOT occur to 
 * me. I feel sad. The solution was simple!
 * I had gotten to the MODULO part but I was trying to do it 
 * for both 6000 and 12000.
 */

echo 'enter miles traveled to calculate the service point : ';
$miles = trim(fgets(STDIN));

$r = $miles % 12000;

if ($r > 6000) {
  $miles_left = 12000 - $r;
  echo "your car needs a major service in $miles_left miles.\n";
} else {
  $miles_left = 6000 - $r;
  echo "Your car needs a minor service in $miles_left miles.\n";
}