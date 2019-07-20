<?php

/*
 * prompt for charge for meal at restaurant, and then calculate and display
 * 10% tip, 7% sales tax, and total for all three amounts
 */

echo 'please enter how much you paid for your meal at Cafe Piyala : ';
$charge = trim(fgets(STDIN));

$tip = 0.10 * $charge;
$tax = 0.07 * $charge;

$finalCost = $charge + $tip + $tax;

echo "In total you paid $finalCost, that included 7% tax of $tax and "
  . "10% tip of $tip";

