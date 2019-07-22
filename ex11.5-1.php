<?php

/*
 * trace table exercise
 */

echo 'enter either 4 or 9 : ';
$a = trim(fgets(STDIN));

$a += 6 / sqrt($a) * 2 + 20;
$b = round($a, 0) % 4;
$c = $b % 3;

echo "a is $a, b is $b, c is $c \n";
