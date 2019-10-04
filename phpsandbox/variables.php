<?php
  // Single line comments
  # Single line comments
  /* 
    Multiline 
    comments
  */

  /* ======================================================================================================== */

  // VARIABLES
  /* 
    - Prefix with $
    - Start with a letter or a underscore.
    - Only letters, numbers, and underscores.
  */
  $output = 'PHP rocks!!';

  /* ======================================================================================================== */

  // String concatenation.
  $stringOne = 'Hello';
  $stringTwo = 'World!!!';
  // Using dots
  // $string = $stringOne . ' ' . $stringTwo;
  // Or, using double quotes. Kinda like tempating.
  $string = "$stringOne $stringTwo";

  /* ======================================================================================================== */

  // Constants
  // Use all uppercase characters for constant. To follow common practice.
  define('GREETING', 'Hello World, I\'m hose.');
  
  echo GREETING . $string;
?>