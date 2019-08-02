<?php
/*
 * plug in x = 4, y = 2, z = 1
 */
$x = trim(fgets(STDIN));
$y = trim(fgets(STDIN));
$z = trim(fgets(STDIN));

if ($x + $y > $z)
  $x = $y + $z;

if ($x > $y + $z)
  $y = $x + $z;

if ($x > $y - $z)
  $z = $x - $z % 2;

echo "$x $y $z";

// why is the $z showing up as 2. It should be 0
// A: oh! because % is done before - !

echo "\n 2 % 2 is ". (2 % 2);