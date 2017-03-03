<?php
/*
Given a random string consisting of numbers, letters, symbols, you need to sum up the numbers in the string.

Note:

Consecutive integers should be treated as a single number. eg, 2015 should be treated as a single number 2015, NOT four numbers
All the numbers should be treaded as positive integer. eg, 11-14 should be treated as two numbers 11 and 14. 
Same as 3.14, should be treated as two numbers 3 and 14
If no number was given in the string, it should return 0

Example:
$str = "In 2016, I want to know how much does iPhone 7+ cost?"

The numbers are 2016, 7
Sum is 2023

*/

function sum_from_string ( $str) {
  $items = preg_split('/[^\d]/', $str);
  return array_sum($items) ;
}


$str = "In 2016, I want to know how much does iPhone 7+ cost?" ;

echo sum_from_string(  $str) ;









