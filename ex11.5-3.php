<?php

/*
 * prompt user to enter an angle in radians and calculate and display
 * angle in degres.
 * Hint: 2*pi*rad = 360 deg
 *         pi*rad = 180 deg
 *           1 rad = 180 deg / pi = 57.29 deg
 * formula: deg = rad * 180 / pi
 */

define("DEG", 180);

echo 'enter angle in radians : ';
$angleRad = trim(fgets(STDIN));

$angleDeg = $angleRad * DEG / pi();

echo "the angle in degrees is $angleDeg";