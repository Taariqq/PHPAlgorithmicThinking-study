<?php

/*
 * code from the flowchart
 */
echo 'please enter a number :';
$x = trim(fgets(STDIN));

$w = $x * 3 - 15;
$z = ($w + 7) * ($x + 4) - 10;

if ($w > $x && $z > $x) {
  $x = $x + 1;
  $y = $x / 2 + 4;
} else {
  $y = $x / 4 + 2;
}

echo $y;