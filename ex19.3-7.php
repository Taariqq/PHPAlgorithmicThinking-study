<?php

/*
 * Prompt for their name, and then display "good morning __" or 
 * "good evening __" or "good night __", chosen randomly.
 */

echo 'Please let us know your name : ';
$naam = trim(fgets(STDIN));

$greeting = ["Good morning ", "Good evening ", "Good night "];

echo $greeting[rand(0, 2)] . $naam;
