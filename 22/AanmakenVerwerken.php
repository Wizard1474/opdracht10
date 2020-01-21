<?php
if (isset($_POST['submit']))
require 'config.inc.php';
$date = $_POST['date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$id_class = $_POST['klasVeld'];


$url = 'https://ouderbc3.ict-lab.nl/php/mail.php';

$query = "INSERT INTO `ouderavonddag` (`id_date`, `date`, `start_time`, `end_time` , `id_class`) VALUES (NULL, '$date', '$start_time', '$end_time', '$id_class');";


if(mysqli_query($mysqli, $query))
	{
		echo " toegevoegd!</p>";
		header('Location: $url');
	}
	
	else
	{
		echo "<p>Fout bij het toevoegen!</p>";
		echo "<p>U heeft wellicht iets fout ingevult, klik <a>hier</a></p>";
		echo mysqli_error($mysqli);
	}


	//Toon studenten 

//$dede = "SELECT * FROM students";
//$resultaat = mysqli_query($mysqli, $dede);
//if (mysqli_num_rows($resultaat) == 0)
//{
//	echo "<p>nope</p>";
//}
//else{
//
//	echo "<br><br>";
//
//echo "<h1>Vul hier informatie in die u wilt koppelen aan deze avond? Discription</h1>";
//echo "<h1>Email voor de studenten?</h1>";


//	echo "<br><br>";
//echo "<form name='Textarea' method='post' action='HIERMOETNOGIETS.php'>";
//echo "<textarea rows='4' cols='50'> ";
//echo "</textarea><br>";
//echo "<input type='submit' name='submit' id='submit' value='versturen'>";
//echo "<br>";
//echo "</form>";



//while ($rij = mysqli_fetch_array($resultaat))
//{
	//echo "<table border='1'>";
	//echo "<tr>";
	//echo "<td>" . $rij['id_students']  ;
	//echo "<td>" . $rij['first_name'] ;
	//echo "<td>" . $rij['last_name'] ;
	//echo "<td>" . $rij['email'] ;
	//echo "<td>" . $rij['phone']  ;
//echo "</table>";

//}





?>