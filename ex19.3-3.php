<?php

/*
 * prompt to enter name of the month, and then display the 
 * corresponding # (1 for January, 2 for Feb and so on). For invalid
 * values an error message should be displayed. Script should fxn
 * properly even when the words are entered in capital, like
 * JANUARY.
 */

echo 'please enter the name of the month : ';
$month = trim(fgets(STDIN));

switch (strtoupper($month)) {
  case "JANUARY":
    echo '1';
    break;
  case "FEBRUARY":
    echo '2';
    break;
  case "MARCH":
    echo '3';
    break;
  case "APRIL";
    echo '4';
    break;
  case "MAY";
    echo '5';
    break;
  case "JUNE";
    echo '6';
    break;
  case "JULY";
    echo '7';
    break;
  case "AUGUST";
    echo '8';
    break;
  case "SEPTEMBER";
    echo '9';
    break;
  case "OCTOBER";
    echo '10';
    break;
  case "NOVEMBER";
    echo '11';
    break;
  case "DECEMBER";
    echo '12';
    break;
  default:
    echo 'please check spelling of the month';
    break;
}