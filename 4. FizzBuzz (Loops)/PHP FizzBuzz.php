<?php

// While Loop Practice
$i = 1;
while ($i<=100){
  if (($i % 3 == 0) && ($i % 5 == 0)){
    echo "FizzBuzz";
  } elseif ($i % 3 === 0){
    echo "Fizz";
  } elseif ($i % 5 === 0){
    echo "Buzz";
  } else {
    echo $i;
  }
  echo "\n";
  $i += 1;
}

// For Loop Practice
/*
$output = [];
for ( $j=1; $j <= 100; $j+= 1){
  if (($j % 3 == 0) && ($j % 5 == 0)){
    array_push($output, "FizzBuzz");
  } elseif ($j % 3 === 0){
    array_push($output, "Fizz");
  } elseif ($j % 5 === 0){
    array_push($output, "Buzz");
  } else {
    array_push($output, $j);
  }
}
foreach($output as $value){
  echo "$value \n";
}
*/
