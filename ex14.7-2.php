<?php
/*
 * write a script that creates and displays a random word 
 * consisting of five letters. The first letter must be a capital
 * letter
 */
$alpha = "abcdefghijklmnopqrstuvwxyz";
echo $random_word = strtoupper($alpha[rand(0, 25)])
  .$alpha[rand(0, 25)].$alpha[rand(0, 25)].$alpha[rand(0, 25)]
  .$alpha[rand(0, 25)];

