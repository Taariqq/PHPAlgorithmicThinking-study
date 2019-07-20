<?php
/*
prompt user for subtotal and gratuity rate (on a scale of 0 to 100)
and then calculate the tip and total. e.g. if the user enters
30 and 10, the PHP script should display "Tip is $3.00 and 
Total is $33.00"
*/

echo 'please enter subtotal for the meal : ';
$subtotal = trim(fgets(STDIN));
echo 'please enter gratuity "rate" (0 - 100) : ';
$gratuity = trim(fgets(STDIN));
$tip = ($gratuity / 100) * $subtotal;
 
$total = $tip + $subtotal;

echo "Your total is $$total with a tip of $$tip";