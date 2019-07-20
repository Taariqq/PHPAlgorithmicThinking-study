<?php

/*
 * prompt for current month and current day.
 * calculate number of day until the end of the year.
 * Hint: each month has 30 days
 */

define("YEAR", 365);

echo 'please enter month (1-12) : ';
$month = trim(fgets(STDIN));
echo 'please enter day of the month (1-30) : ';
$day = trim(fgets(STDIN));

$currentDay = $month * $day;
$remainingDays = YEAR - $currentDay;

echo "Current day # of your input is $currentDay and you have $remainingDays "
  . "days to go before New Year's";
