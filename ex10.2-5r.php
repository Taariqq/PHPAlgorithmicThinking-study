<?php

/*
 * prompt for charge for meal at restaurant, and then calculate and display
 * 10% tip, 7% sales tax, FROM the total. In other words, reverse calculate
 */

echo 'please enter how much you paid for your meal at Cafe Piyala : ';
$charge = trim(fgets(STDIN));

$tip = 0.10 * $charge;
$tax = 0.07 * $charge;

$finalCost = $charge - ($tip + $tax);

echo "You paid $finalCost, plus 7% tax of $tax and "
  . "10% tip of $tip";

