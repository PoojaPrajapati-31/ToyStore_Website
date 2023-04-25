<?php
session_start();

if(isset($_SESSION['answer'])) {
    $answer = $_SESSION['answer'];
}
else {
    $answer = rand(1, 100);
    $_SESSION['answer'] = $answer;
}

if (isset($_POST['submit'])) {
    $guess = $_POST['guess'];

    if ($guess == $answer) {
        echo '<h1>Yes....You guessed it!</h1>';
        session_destroy();
    } elseif ($guess < $answer) {
        echo '<h1>Too low!</h1>';
    } else {
        echo '<h1>Too high!</h1>';
    }
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Guess the Number Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    <style>
        body {
	font-family: Arial, sans-serif;
}
.container {
	margin: 0 auto;
	max-width: 600px;
	text-align: center;
}
h1 {
	font-size: 3em;
	margin-top: 50px;
	margin-bottom: 30px;
}
p {
	font-size: 1.5em;
	margin-bottom: 30px;
}
input[type="text"] {
	padding: 10px;
	font-size: 1.2em;
	border: none;
	border-radius: 5px;
	box-shadow: 0 0 5px #ccc;
}
button {
	padding: 10px 20px;
	font-size: 1.2em;
	border: none;
	border-radius: 5px;
	background-color: #3fc1c9;
	color: #fff;
	cursor: pointer;
	transition: background-color 0.2s ease;
}
button:hover {
	background-color: #203247;
}
hr{
	width: 50px; 
}
</style>
</head>
<body>
	<div class="container">
        <h1>Game Time!</h1>
        <br>
		<hr>

        <br>
		<h1>Guess the Number</h1>
		<p>Guess a number between 1 and 100.</p>
		<form method="post" action="game.php">
			<input type="text" name="guess" placeholder="Enter your guess here" required>
			<button type="submit" name="submit">Submit</button>
		</form>
	</div>
</body>
</html>
