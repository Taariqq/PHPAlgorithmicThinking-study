<?php
/*
prompt for price of 3 products, calculate after tax value w/
VAT of 20% as well as their average value (after tax)
*/

define("VAT", 0.2);

echo 'please enter price for ergo chair : ';
$ergo = trim(fgets(STDIN));
echo 'please enter price for the movable desk : ';
$desk = trim(fgets(STDIN));
echo 'please enter price for 4K monitor : ';
$monitor = trim(fgets(STDIN));

$totalPrice = $ergo + $desk + $monitor;
// price after tax
$finalPrice = $totalPrice + ($totalPrice * VAT);

$averagePrice = $finalPrice / 3;

echo "Total price after tax is $$finalPrice with average
being $$averagePrice";
