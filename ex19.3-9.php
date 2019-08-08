<?php

/*
 * prompt user for Beaufort number for wind speed, and then display
 * the corresponding description.
 */

echo 'Please enter a Beaufort Number : ';
$beaufort = trim(fgets(STDIN));

switch ($beaufort) {
  case 0:
    echo 'Winds Calm.';
    break;
  case 1:
    echo 'Light air';
    break;
  case 2:
    echo 'Light breeze';
    break;
  case 3:
    echo 'Gentle breeze';
    break;
  case 4:
    echo 'Moderate breeze';
    break;
  case 5:
    echo 'Fresh breeze';
    break;
  case 6:
    echo 'Strong breeze';
    break;
    case 7:
      echo 'Moderate gale';
      break;
  case 8:
    echo 'Gale';
    break;
  case 9:
    echo 'Strong gale';
    break;
  case 10:
    echo 'Storm';
    break;
  case 11:
    echo 'Violent storm';
    break;
  case 12:
    echo 'Hurricane force';
    break;

  default:
    echo 'Seems to be an inacurate Beaufort number';
    break;
}