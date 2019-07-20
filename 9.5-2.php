<?php


$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

$c = $a + $b;
$d = 5 + $a / $b * $c +2;
$e = $c - $d;
$c -= $d + $c;
$e--;
$d -= $c + $a % $c;

echo "$c, $d, $e ";
?>
