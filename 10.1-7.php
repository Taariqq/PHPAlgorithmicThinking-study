<?php

/*
 * enter price and discount offered as %age (0-100) and
 * get new price
 */

echo 'Please enter the pre-discount price of the item : ';
$preDiscountPrice = trim(fgets(STDIN));

echo 'Please enter the discount %age (0-100) : ';
$discount = trim(fgets(STDIN));

$totalDiscount = $preDiscountPrice * ($discount/100);

$priceAfterDiscount = $preDiscountPrice - $totalDiscount;

echo "The price after $discount% discount is $priceAfterDiscount";
