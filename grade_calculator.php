<?php
/**
 * Task 3: Grade Calculator
 * Develop a PHP script named grade_calculator.php 
 * that computes the average of three test scores 
 * and determines the corresponding letter grade.
 * 
 * Create a form where the user can input three test scores. 
 * Calculate the average 
 * and display it along with the corresponding grade (A, B, C, D, F).
 * 
 * Or, declare 3 variable test scores 
 * and calculate the average 
 * and display it along with the corresponding grade (A, B, C, D, F)
 */

$bangla = 80;
$english = 52;
$math = 90;


function getAverage(array $subjects) {
  return array_sum($subjects)/count($subjects);
}



function defineGPA(...$allSubjects){
  $averageNumber = getAverage($allSubjects);

  if ($averageNumber >= 80) {
    $result = "A+";   
  }else if ($averageNumber >= 70) {
    $result = "A";    
  }else if ($averageNumber >= 60) {
    $result = "A-";    
  }else if ($averageNumber >= 50) {
    $result = "B";    
  }else if ($averageNumber >= 40) {
    $result = "C";    
  }else if ($averageNumber >= 33) {
    $result = "D";;
  }else{
    $result = "F";
  }

  return $result;
}

echo defineGPA($bangla,$english,$math);
 