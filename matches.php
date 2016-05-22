<?php include("top.html"); ?>

<form action="matches-submit.php" method="get">
	<fieldset class="column">
		<legend>Returning User:</legend>
		<label class="column">Name:</label> <input type="text" size="16" name="name"><br />
		<input type="submit" value="View My Matches" formaction="matches-submit.php">
	</fieldset>
</form>

<?php include("bottom.html"); ?>