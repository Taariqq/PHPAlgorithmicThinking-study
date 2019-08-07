<?php

/*
 * the solution provided by the book is incorrect!
 */

$pay_rate = trim(fgets(STDIN));
$hours_worked = trim(fgets(STDIN));

if ($hours_worked <= 40) {
  $gross_pay = $pay_rate * $hours_worked;
} else {
$gross_pay = 2 * $pay_rate * $hours_worked;  
}

$net_pay = 0.7 * $gross_pay;
echo "Net Pay: $net_pay";