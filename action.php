<?php
   if( $_GET["number1"] || $_GET["number2"] ) {
      $sum =  $_GET["number1"]+$_GET["number2"];
      echo "The sum of $number1 and $number2 is: ".$sum; 
      
      exit();
   }
?>
