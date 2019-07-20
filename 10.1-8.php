<?php

/*
 * get pre-tax price & discount (0-100). Assume 19% VAT.
 * display final price
 */
define("VAT", 0.19);

echo 'Please enter pre-tax price : ';
$preTaxPrice = trim(fgets(STDIN));
echo 'Enter discount offered (0-100) : ';
$discount = trim(fgets(STDIN));

$priceWithTax = $preTaxPrice + ($preTaxPrice * VAT);

$priceAfterDiscount = $priceWithTax - ( $preTaxPrice * $discount / 100);

echo "Final price with $discount% discount is $priceAfterDiscount, inclusive of taxes";


