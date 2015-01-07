<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Make my decision</title>

	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>

	<header>

	</header>

	<div id="container">

		<form id="question-form" action="answers.php" method="post">

			<label>What is your question?: </label><br />
			<input type="text" class="question" name="question" value="What is your question?" /><br />
			

			<label>Give me your choices: </label><br />
			<input type="text" class="answers" name="answer[]" /><br />
			<input type="text" class="answers" name="answer[]" /><br />
			<input type="text" class="answers" name="answer[]" /><br />
			<input type="submit" value="Answer!" /><br />
		
		</form>

	</div> <!-- end of #idcontainer -->

</body>


</html>
