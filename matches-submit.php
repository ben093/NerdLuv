<?php
include("top.html");

$name = $_GET["name"];

$myfile = fopen("singles.txt", "r") or die("Unable to open file!");
$matches = array();
$info = array();

$match = false;
$index = 0;
$indexOfMatch = 0;
while(!feof($myfile))
{
	$line = fgets($myfile);
	array_push($info, $line);
	$info[$index] = explode(",", $line);
	$index++;
}
fclose($myfile);

for($i = 0; $i < count($info) - 1; $i++)
{
	if(strcmp($info[$i][0], $name) == 0)
	{
		$indexOfMatch = $i;
	}
}

$gender = $info[$indexOfMatch][1];
$age = $info[$indexOfMatch][2];
$personality = $info[$indexOfMatch][3]; 
$OS = $info[$indexOfMatch][4];
$minAge = $info[$indexOfMatch][5];
$maxAge = $info[$indexOfMatch][6];

for($i = 0; $i < count($info) - 1; $i++)
{
	if($info[$i][1] != $gender)
	{
		if($info[$i][2] > $minAge && $info[$i][2] < $maxAge)
		{
			if($info[$i][5] < $age && $info[$i][6] > $age)
			{
				if($info[$i][4] == $OS)
				{
					for($j = 0; $j < strlen($info[$i][3]); $j++)
					{
						if(strpos($personality,$info[$i][3][$j]))
						{
							array_push($matches, $info[$i]);
							break;
						}
					}
				}
			}
		}
	}
}
?>

<h2>Matches for <?= $name ?></h2>

<?php
for($i = 0; $i < count($matches); $i++)
{
?>
<div class="match">
	<p>
		<img src="user.jpg" alt="match" /> 
		<?= $matches[$i][0] ?></p>
		<ul>
			<li><strong>gender:</strong> <?= $matches[$i][1] ?></li>
			<li><strong>age:</strong> <?= $matches[$i][2] ?></li>
			<li><strong>type:</strong> <?= $matches[$i][3] ?></li>
			<li><strong>OS:</strong> <?= $matches[$i][4] ?></li>
		</ul>
	</p>
</div>
<?php
}
?>

<?php include("bottom.html"); ?>