<?php
	include "views/header.php";
	require_once "views/home.view.php";
	echo getcwd() . "\n";
?>

	<h2>What's your question?</h2>
	<hr>
	<div class="center">
		<form action="controllers/ask.controller.php" method="post">
			<input type="text" id="name" name="name" placeholder="Name"><br>
			<input type="text" id="email" name="email" placeholder="Email"><br>
			<input type="text" id="topic" name="topic" placeholder="Question Topic"><br>
			<input type="text" id="content" name="content" placeholder="Content"><br>
			<input type="submit" value="post">
		</form>
	</div>
</body>
</html>