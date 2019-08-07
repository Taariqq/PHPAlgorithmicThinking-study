<?php

/*
 * prompt for pay rate and hours worked and calculate and display
 * net pay.
 * tax = 30%
 */
echo 'please enter hours worked last week : ';
$hw = trim(fgets(STDIN));
echo 'please enter the pay rate : ';
$pr = trim(fgets(STDIN));

if ($hw > 40) {
  $oth = $hw -40;
  $rh = $hw - $oth;
  $otp = $oth * ($pr *2);
  $rp = $rh * $pr;
  $grossPay = $rp + $otp;
} else {
  $grossPay = $hw * $pr;
}

$tax = $grossPay * 0.3;
$netPay = $grossPay - $tax;

echo "Net pay for $hw hours worked at $pr per hour is $netPay"
  . " with a tax of $tax";