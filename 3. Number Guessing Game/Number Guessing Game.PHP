<?php

/*

-- Number Guessing Game -- 

In this project, you’ll create a number guessing game. 

Your program will generate a random number between 1 and 10. You’ll run the game 10 times and tell the user some information about their guessing abilities. 

We’ll see how often the player can guess a randomly generated number. After several rounds, we’ll tell the player what percentage of the time they guessed correctly and whether they had a tendency to guess too high or too low. 

*/


// Global variables
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of 5 numbers between 1 and 10 (inclusive). Do you think you can guess them correctly?\n";

function guessNumber(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  
  $play_count += 1;

  $randNum = rand(1,10);
  echo "Round $play_count: \n";
  $guess = intval(readline("> "));
  echo "My number: $randNum / Your number: $guess \n";
  
  if ($randNum === $guess){
    $correct_guesses += 1;
    echo "Well done! \n";
  } elseif ($randNum < $guess){
    $guess_high += 1;
  } else {
    $guess_low += 1;
  }
 echo "\n";
};

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percentage = $correct_guesses / $play_count * 100;

echo "\nYou guessed correctly $percentage% of the time. \n";

if ($guess_high > $guess_low){
  echo "When you guessed wrong, you tended to guess too high.";
} elseif ($guess_low > $guess_high){
  echo "When you guessed wrong, you tended to guess too low.";
} else {
  echo "When you guessed wrong, you had an even mix between too high and too low.";
};

echo "\n";

