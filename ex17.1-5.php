<?php

/*
 * gross pay = pay rate * number of hours worked
 * over 40 hours = time-and-a-hal
 * * Prompt for pay rate and hours worked
 * and then calculate gross pay
 */

echo 'please enter # of hours you worked this week :';
$hw = trim(fgets(STDIN));
echo 'please enter your hourly pay rate :';
$pr = trim(fgets(STDIN));

if ($hw <= 40) {
  $gp = $hw * $pr;
  echo "Your gross pay for this week is $gp \n"
  . "with total hours worked $hw and a pay rate of $pr";
} else {
  $pay = $pr * 40;
  $oth = $hw - 40;
  $otp = $oth * ($pr * 1.5);
  $gp = $otp + $pay;
  echo "Your gross pay for this week is $gp \n"
  . "with total hours worked $hw and a pay rate of $pr \n";
}
/*
 * condensed version
 */

if ($hw <= 40) {
  $gp = $hw * $pr;
} else {
  $gp = $pr * 40 + ($hw - 40) * ($pr * 1.5);
}

echo "gross pay calculated the condensed way is $gp";