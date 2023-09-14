<?php 
/**
 * Task 4: Even or Odd Checker
 * 
 * Build a PHP program called even_odd_checker.php 
 * that checks whether a given number is even or odd. 
 * Provide an input field where the user can enter a number. 
 * Display a message indicating whether the number is even or odd.
 */


function getEvenOrOddStatus(int $number) {
  if ($number % 2 === 0) {
    $result = "even";
  }else if($number % 2 !== 0){
    $result = "odd";
  }

  return $result."\n"; 
}

echo getEvenOrOddStatus(9);
echo getEvenOrOddStatus(20);