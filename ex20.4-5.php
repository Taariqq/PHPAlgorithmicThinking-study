<?php

/*
 * prompt for two values, one for temperature and one for wind speed.
 * If the temperature is above 75 degrees Fahrenheit, the day is 
 * considered hot, otherwise it is cold. If the wind speed is above
 * 12 miles per hour, the day is considered windy, otherwise it is 
 * not windy. The script should display one single message, 
 * depending on values given. For example, if a user enters 60 for 
 * temperature and 10 for wind speed, the script should display
 * "The day is cold and not windy"/
 */
echo 'Please enter the temperature : ';
$temperature = trim(fgets(STDIN));
echo 'Please enter the wind speed : ';
$wind = trim(fgets(STDIN));

if ($temperature > 75 && $wind > 12) {
  echo "The day is hot and windy.";
} elseif ($temperature < 75 && $wind > 12) {
  echo "The day is cold and windy.";
} else {
  echo "The day is cold and not windy.";
}