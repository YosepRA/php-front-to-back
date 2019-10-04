<?php
  # LOOPS

  /* 
    - For
    - While
    - Do...while
    - ForEach
  */

  # FOR LOOPS
  // for ($i=0; $i < 10; $i++) { 
  //   echo $i;
  //   echo '<br>';
  // }

  /* ======================================================================================================== */

  # WHILE LOOPS
  // $i = 0;

  // while ($i < 10) {
  //   echo 'Hello world';
  //   echo '<br>';
  //   $i++;
  // }

  /* ======================================================================================================== */

  # DO...WHILE LOOPS
  // $i = 0;

  // do {
  //   echo 'Hello World';
  //   echo '<br>';
  //   $i++;
  // } while ($i < 0);

  /* ======================================================================================================== */

  # FOREACH LOOPS
  // → Loop through an array. 
  // We can use regular for-loop, but this is a less verbose way.

  // Indexed Array
  // $people = ['Joe', 'Ryan', 'Carlo'];
  // foreach ($people as $person) {
  //   echo "Hello, $person!";
  //   echo '<br>';
  // }

  // Associative Array
  $people = [
    'Joe' => 20,
    'Ryan' => 30,
    'Carlo' => 40
  ];
  foreach ($people as $person => $id) {
    echo "The id of $person is $id.";
    echo '<br>';
  }
?>