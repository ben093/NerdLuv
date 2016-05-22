<?php include("top.html"); ?>

<form action="signup-submit.php" method="post">
	<fieldset>
		<legend>New User Signup:</legend>
		<label class="column">Name:</label> <input type="text" size="16" name="name"><br />
		<label class="column">Gender:</label> <input type="radio" name="sex" value="M">Male <input type="radio" name="sex" value="F" checked>Female<br />
		<label class="column">Age:</label> <input type="text" name="age" maxlength="2" size="6"><br />
		<label class="column">Personality Type:</label> <input type="text" name="personality" maxlength="4" size="6"> (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)<br />
		<label class="column">Favorite OS:</label> <select name="OS">
						<option value="Windows" selected>Windows</option>
						<option value="Mac OS X">Mac OS X</option>
						<option value="Linux">Linux</option>
					</select><br />
		<label class="column">Seeking age:</label> <input type="text" name ="minAge" maxlength="2" size="6" placeholder="min"> to <input type="text" name="maxAge" maxlength="2" size="6" placeholder="max"><br />
		<input type="submit" value="Sign Up" formaction="signup-submit.php">
	</fieldset>
</form>

<?php include("bottom.html"); ?>