<?php
  // Generate a random number
  define(NUMBER, rand(1, 10));


	// get the the users guess from the textfield
	$guess = $_POST['guess'];

  if ($guess == NUMBER){
    echo 'Correct! Have fun being Donkey Kong!';
  }
  else if ($guess != NUMBER){
    echo 'Incorrect. Looks like you do not get to play as a funny ape with a tie.';
  }
  ?>