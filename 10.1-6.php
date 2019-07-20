<?php

/*
 * An employee needs a script to enter the before-tax price
 * of a product and calculate its final price. Assume VAT of 19%
 */

define ("VAT", 0.19);

echo 'Please enter pre-tax price : ';
$price = trim(fgets(STDIN));

$finalPrice = $price + ($price * VAT);

echo "The final price of the product, including VAT is $finalPrice";