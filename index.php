<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
     <link rel="stylesheet" href="./css/style.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="manifest" href="fav/site.webmanifest">
<link rel="mask-icon" href="fav/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <!-- title -->
    <title>guess My Number PHP</title>
	</head>
	<body>
    <h1><?php echo 'Guess my number in PHP.'; ?></h1>
		<?php echo '<p>If you had six people in the room and you are unable to decide who plays as Donkey Kong in Mario Party, well you are in luck... also Mario Party is only four players. If you are in this situation, have everyone guess the number and the one who guesses correctly gets to play as Donkey Kong. Problem Solved!</p>'; ?>

		<!-- forms to get the guess from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=guess">Guess (1-6):</label>
      <input type="number" id="guess" step = "1" max = "6" placeholder="guess" name="guess"><br><br>
 <!-- button -->
      <input type="submit" value="Submit Answer">
</form>
			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
    </body>
</html>