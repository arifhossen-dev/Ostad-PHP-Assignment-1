<?php
/**
 * Task 2: Temperature Converter
 * Design a PHP program called temperature_converter.php 
 * that converts temperatures between Celsius and Fahrenheit.
 * 
 * Provide a form where the user can input a temperature value 
 * and select the conversion direction (Celsius to Fahrenheit or vice versa). 
 * Display the converted temperature.
 * 
 * Or, Declare 3 variable temperature values 
 * and select the conversion direction (Celsius to Fahrenheit or vice versa). 
 * Display the converted temperature.
 */

 // Celsius To Fahrenheit

 $tempInCelsius_1 = 55;
 $tempInCelsius_2 = 71;
 $tempInCelsius_3 = 95;
  /**
  * According to google Celsius to Fahrenheit Formula 
  * is: (50°C × 9/5) + 32 = 122°F
  *
  */
 function celsiusToFahrenheit($celsius){ 
    $fahrenheit = ($celsius * (9/5) ) + 32;   
    $floatResult = number_format((float)$fahrenheit, 2);
    return "{$celsius}°C is equivalent to:  {$floatResult}°F\n";
 }

 echo celsiusToFahrenheit($tempInCelsius_1);
 echo celsiusToFahrenheit($tempInCelsius_2);
 echo celsiusToFahrenheit($tempInCelsius_3);

echo "
<-***************************->
\n";

 // Fahrenheit to Celsius

 $tempInFahrenheit_1 = 132;
 $tempInFahrenheit_2 = 155;
 $tempInFahrenheit_3 = 195;

 /**
  * According to google Fahrenheit To Celsius Formula 
  * is: (32°F − 32) × 5/9 = 0°C
  *
  */
 function fahrenheitToCelsius($fahrenheit) {  
    $celsius = ($fahrenheit - 32) * (5/9);  
    $floatResult = number_format((float)$celsius, 2); 
    return "{$fahrenheit}°F is equivalent to :  {$floatResult}°C \n";
 }  

 echo fahrenheitToCelsius($tempInFahrenheit_1);
 echo fahrenheitToCelsius($tempInFahrenheit_2);
 echo fahrenheitToCelsius($tempInFahrenheit_3);

