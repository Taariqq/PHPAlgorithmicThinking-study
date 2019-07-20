<?php

/*
 * prompt to enter electric meter reading at a) beginning and b) end
 * of the month. Calculate and display kWh consumed and amount owed
 * w/ $0.06 / kWh with VAT of 20%
 */

define("PRICE", 0.06);
define("VAT", 0.2);

echo 'please enter beginning-of-the-month meter reading in kWh : ';
$begkWh = trim(fgets(STDIN));
echo 'please enter meter reading for end-of-the-month in kWh : ';
$endkWh = trim(fgets(STDIN));

$kWhConsumed = $endkWh - $begkWh;

$amtBeforeTax = $kWhConsumed * PRICE;
$amtAfterTax = $amtBeforeTax + ($amtBeforeTax * VAT);

echo "Amount of kWh consumed is $kWhConsumed and money owed is $$amtAfterTax";




