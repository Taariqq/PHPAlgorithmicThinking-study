<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
