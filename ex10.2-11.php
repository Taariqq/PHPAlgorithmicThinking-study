<?php
/*
 * prompt for after-tax price and calculate before-tax price, VAT is 20%
 */

define("VAT", 0.2);

echo 'Please enter after-tax price : ';
$priceAfterTax = trim(fgets(STDIN));

$priceBeforeTax = $priceAfterTax - ($priceAfterTax * VAT);

echo "price before tax is $$priceBeforeTax with a VAT of 20%";
