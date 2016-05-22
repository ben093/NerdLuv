<?php include("top.html"); 

	//$myfile = fopen("singles.txt", "w") or die("Unable to open file!");
	$myfile = "singles.txt";
	$txt = $_POST["name"] . ",";
	file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
	$txt = $_POST["sex"] . ",";
	file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
	$txt = $_POST["age"] . ",";
	file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
	$txt = $_POST["personality"] . ",";
	file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
	$txt = $_POST["OS"] . ",";
	file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
	$txt = $_POST["minAge"] . ",";
	file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
	$txt = $_POST["maxAge"] . "\n";
	file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
	//fclose($myfile); 

?>
<h1>Thank you!</h1>
<p>Welcome to NerdLuv, <?= $_POST["name"] ?></p>
<p>Now <a href="matches.php">log in to see your matches!</a>

<?php include("bottom.html"); ?>