<?php
function sum_of_minimums($numbers)
{
  # Code goes here
  

  $sum = 0;
  foreach ($numbers as $number) {
    if (!empty($number)) {
    $minValue = min($number);
    $sum += $minValue;
    }
}
 return $sum;
}

$numbers = [ [ 1, 2, 3, 4, 5 ]        #  minimum value of row is 1
  , [ 5, 6, 7, 8, 9 ]        #  minimum value of row is 5
  , [ 20, 21, 34, 56, 100 ]  #  minimum value of row is 20
];