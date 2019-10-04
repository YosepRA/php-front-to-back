<?php
  # ARRAYS

  // There are multiple types of arrays.
  /* 
    - Indexed → the most common one.
    - Associative
    - Multi-dimensional 
  */

  /* ======================================================================================================== */

  # INDEXED ARRAY
  // → Usual array. Zero-based. Key is number.
  // Defined using "array" function or using "[]".
  // $people = array('Joe', 'Ryan', 'Sarah');
  // echo $people[1]; // Ryan

  // $numbers = array(1, 2, 3);
  // echo $numbers[1]; // 2

  $people = ['Joe', 'Ryan', 'Sarah'];
  // echo $people[0] . ' ' . $people[2]; // Joe Sarah

  # How to add a value to an array.
  // By using its index. 
  // If there's no value for that index number → create new.
  // If there's an existing value for that index number → replace.
  // $people[3] = 'Carlo';
  // echo $people[2] . ' ' . $people[3]; // Sarah Carlo

  // 'Sarah' will be replaced by a new value assigned to its index.
  // $people[2] = 'Carlo';
  // echo $people[2]; // Carlo

  // Or, if you don't know the unusable index position. Use this.
  // It will automatically add the new value to the latest index.
  // $people[] = 'Carlo';
  // echo $people[3]; // Carlo

  # There are useful array methods given an array as its argument.
  // "count" → check the length.
  // echo count($people); // 3

  // "print_r" → Map out the array data along with its index.
  // echo print_r($people); // Array ( [0] => Joe [1] => Ryan [2] => Sarah ) 1

  // "var_dump" → Give a much more in-depth informations of an array. Useful for debugging.
  // echo var_dump($people); // array(3) { [0]=> string(3) "Joe" [1]=> string(4) "Ryan" [2]=> string(5) "Sarah" }

  /* ======================================================================================================== */

  # ASSOCIATIVE ARRAY
  // → Key value pair based array. Kinda like Map in JavaScript.

  // $people = array('Joe' => 20, 'Ryan' => 30);
  // echo $people['Joe']; // 20

  // $ids = [20 => 'Joe', 30 => 'Ryan'];
  // echo $ids[30]; // Ryan

  # How to add new value to an associative array.
  // → Just the same with Indexed Array. But rather than using an index number, we can use ~
  // ~ a key name to our liking.
  // $people = array('Joe' => 20, 'Ryan' => 30);
  // $people['Carlo'] = 40;
  // echo $people['Carlo']; // 40

  // If we omit the key when adding a value, it will use an index number starting from zero.
  // and the index iteration will be continued even if it gets cut by a key name.
  // $people[] = 40; // [0] => int(40)
  // $people[] = 50; // [1] => int(50)
  // $people['Carlo'] = 60; // ['Carlo'] => int(60)
  // $people[] = 70; // // [2] => int(70)
  // echo var_dump($people);

  /* ======================================================================================================== */

  # MULTI DIMENSIONAL ARRAY
  // → Basically nested arrays.

  // $cars = array(
  //   array('Honda', 20, 10),
  //   array('Toyota', 30, 20),
  //   array('Ford', 40, 30)
  // );

  // echo $cars[0][0]; // Honda
  // echo $cars[1][2]; // 20
  // echo $cars[2][1]; // 40
?>