<?php
/**
 * Create a PHP script named weather_report.php 
 * that provides weather information based on temperature. 
 * Use a variable to store the temperature. 
 * Depending on the temperature range, 
 * display messages like "It's freezing!", "It's cool.", or "It's warm."
 */

 $temperature = 35;

 function temperatureMessage($temperature) {
    if ($temperature > 25) {
      $result = "It's warm.";
    }else if($temperature > 0){
      $result = "It's cool.";
    }else if($temperature < 0){
      $result = "It's freezing!";
    }

    return $result;
 }

 echo temperatureMessage(30);