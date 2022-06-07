u<?php

  /*
 * Arrays in PHP
 * indexed or numeric array
 * associative array
 * multi-dimensional array (array of arrays)
 */

  // indexed or numeric array
  $cars = ['Subaru', 'Hundai', 'Chevi'];

  // echo $cars; // this won't work

  // var_dump($cars);
  // print_r($cars);

  echo $cars[1] . '<br>';


  // associative array
  $fruits = ['red' => 'Strawberry', 'yellow' => 'Lemon', 'green' => 'Grapes'];

  echo $fruits['red'] . '<br>';


  // multi-dimensionl
  $newArray = [$cars, $fruits];

  // get chevy
  echo $newArray[0][2] . '<br>';

  // Display the cars as an ordered list
  $olist = '<ol>';
  foreach ($cars as $car) {
    $olist .= "<li>$car</li>";
  }
  $olist .= '</ol>';
  echo $olist;


  // Display the cars as an unordered list
  $ulist = '<ul>';
  foreach ($fruits as $fruit) {
    $ulist .= "<li>$fruit</li>";
  }
  $ulist .= '</ul>';
  echo $ulist;


  // Display the contents of the multi-dimensional array
  // Use nested loops
  $mlist = '<ul>';
  foreach ($newArray as $key => $subArray) {
    $mlist .= "<li> Array: $key";
    $mlist .= '<ol>';
    foreach ($subArray as $element) {
      $mlist .= "<li>$element</li>";
    }
    $mlist .= '</ol>';
    $mlist .= '</li>';
  }
  $mlist .= '</ul>';

  echo $mlist;
