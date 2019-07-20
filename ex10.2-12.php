<?php

/*
 * prompt for initial price and discount offered as a %age (0 to 100)
 * calculate and display final price and amount of $ saved.
 */

echo 'please enter the price : ';
$initPrice = trim(fgets(STDIN));
echo 'please enter the discound percentage offered : ';
$discPct = (trim(fgets(STDIN)) / 100);

//echo "disc %age is $discPct";

$discAmt = $initPrice * $discPct;

// $discPercentage = ($discAmt / 100);


$finalPrice = $initPrice - $discAmt;

echo "Final price was $$finalPrice with your savings being $$discAmt";


