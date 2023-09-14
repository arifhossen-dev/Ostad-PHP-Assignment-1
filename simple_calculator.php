<?php
/**
 * Task 7: Simple Calculator
 * 
 * Build a PHP calculator named simple_calculator.php 
 * that performs basic arithmetic operations. 
 * Provide input fields for two numbers 
 * and a dropdown to select the operation (addition, subtraction, multiplication, division). 
 * Display the result of the chosen operation.
 */

 $number_1 = 9;
 $number_2 = 7;
 $operation = "divide";

 function calculate($first,$second,$operation) {
  if ($operation === "add") {
    $result = $first + $second;
  } else if($operation === "subtract"){
    $result = $first - $second;
  } else if($operation === "multiply"){
    $result = $first * $second;
  } else if($operation === "divide"){
    $result = $first / $second;
  }

  return $result;
  
 }


 echo calculate($number_1,$number_2,$operation);