<?php
/**
 * Task 6: Comparison Tool
 * 
 * Develop a PHP tool named comparison_tool.php 
 * that compares two numbers 
 * and displays the larger one using the ternary operator.
 * 
 * Create a form where the user can input two numbers. 
 * Use the ternary operator to determine the larger number and display the result.
 * 
 * Or, declare 2 variable numbers 
 * and use the ternary operator to determine the large number and display the result
 */

 $number_1 = 50;
 $number_2 = 6;

 function getBiggerNumber($first, $second) {
  return $first > $second ? $first : $second;
 }


 echo getBiggerNumber($number_1, $number_2);
