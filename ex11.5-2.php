<?php

/*
 * trace table exercise
 */

echo 'enter either of -2 or -3 : ';
$a = trim(fgets(STDIN));

$b = abs($a) % 4 + pow($a, 4);
$c = $b % 5;

echo "Value of b is $b and value of c is $c";

$d = pow(-3, 4);
$e = pow(-2, 4);
echo "\n value of pow(-3, 4) is $d";
echo "\n value of pow(-2, 4) is $e";

