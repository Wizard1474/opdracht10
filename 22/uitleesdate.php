<?php
require 'config.inc.php';
$opdrachts = "SELECT * FROM ouderavonddag";
$test = mysqli_query($mysqli, $opdrachts);
if (mysqli_num_rows($test) == 0)
{
	echo "<p>nope</p>";
}
else{

echo "<h2>De tijdvakken</h2>";
echo "<table border='1'>";
echo  "<tr>";
	 echo "<th>Datum</th>";
    echo "<th>Datum</th>";
   echo "<th>Begintijd</th>";
   echo "<th>Eindtijd</th>";
      echo "<th>Klas</th>";
   echo "<th>Kies</th>";
   echo "<th>Wijzig</th>";
while ($smile = mysqli_fetch_array($test))
{
	
  echo "</tr>";
	echo "<tr>";
	echo "<td>" . $smile['id_date'];
	echo "<td>" . $smile['date'];
	echo "<td>" . $smile['start_time'];
	echo "<td>" . $smile['end_time'];

	

    $idClass = $smile['id_class'];
                        $zoekclass = "SELECT class FROM class WHERE id_class = " . $idClass;
                        $resultaatclass = mysqli_query($mysqli, $zoekclass);
                        $classss = mysqli_fetch_array($resultaatclass);
                        echo "<td>" . $classss['class'] . "</td>";


	echo "<td><a href='details.php?id_date=" . $smile['id_date'] . "&id_class=" .  $smile['id_class'] . "'>Bekijken</a>";
	echo "<td><a href='details.php?id_date=" . $smile['id_date'] . "&id_class=" .  $smile['id_class'] . "'>Wijzig</a>";
	echo "<tr>";

}
echo "</table>";
echo "<br>";
}
?>