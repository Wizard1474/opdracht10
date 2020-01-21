<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tijdvak Details </title>	
</head>

<body>
	
	<?php
	
require 'config.inc.php';
	
;
	$id_class = $_GET['id_class'];
$id_date = $_GET['id_date'];
$query = "SELECT * FROM ouderAV WHERE id_date = $id_date";

$resulaat = mysqli_query($mysqli, $query);

if(mysqli_num_rows($resulaat) == 0)
	{
		echo "<p>er zijn geen resultaten gevonden.</p>";
		
	}
	
else
	{
		$rij = mysqli_fetch_array($resulaat);

				

			echo "<h2> Gegevens van de tijdvak van klas  " .$rij['class']. ":</h2>";

		}

			$opdracht = "SELECT * FROM ouderavonddag WHERE id_class = $id_class";
	$tijdvak = mysqli_query($mysqli, $opdracht);


if(mysqli_num_rows($tijdvak) == 0)
	{
		echo "<p>er zijn geen leden gevonden.</p>";
	
	}


	while($row = mysqli_fetch_array($tijdvak))
	{
	

			echo "<table border='1'; width='40%';>";


			echo "<tr><td>Naam ouder:</td>";
			echo 	"<td>" .$row['start_time']. "</td></tr>";
	

			echo "<tr><td>Land:</td>";
			echo 	"<td>" .$row['end_time']. "</td></tr>";
	}


	?>
</body>
</html>