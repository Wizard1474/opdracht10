<!DOCTYPE html>
<html>
<head>
	<title>Datum en Tijd Selecteren</title>

		

</head>

<body>

<h2>Hallo Docent</h2>
<h3>Plan hier de ouderavond</h3>
	<!--Docent tijden kiezen (aanmaken)-->

	<form name="Ouder avond maken" method="post" action="AanmakenVerwerken.php">

	<table>
		
		Datum ouderavond: 
		<input type="date" required  name="date" id="date"> <br>
			
			</table>



				<table>
	<h1>Ouderavond maken:</h1>
	
	
		<p>Start</p>
		<input type="time" name="start_time" required="required"  id="start_time">
		<p>Eindigt</p>
		<input type="time" name="end_time" required="required"   id="end_time">
<br><br>

		
		  	<select name="klasVeld" id="klasVeld" required>
<?php
require ('config.inc.php');
$opdracht = "SELECT * FROM class";
$resultaat = mysqli_query($mysqli, $opdracht);
while ($declass = mysqli_fetch_array($resultaat))

{
	echo "<option value=" . $declass['id_class'] . ">";
	echo $declass['class'];
	echo "</option>";
}
?>
				</select><br>


				<?php
   // $start = "18:00"; //you can write here 00:00:00 but not need to it
    //$end = "22:00";

    //$tStart = strtotime($start);
    //$tEnd = strtotime($end);
    //$tNow = $tStart;
    //echo '<select name="tijd[]">';
    //while($tNow <= $tEnd){
        //echo '<option value="'.date("H:i:s",$tNow).'">'.date("H:i:s",$tNow).'</option>';
       // $tNow = strtotime('+15 minutes',$tNow);
    //}
    //echo '</select>';
?>
			

	


	
<br>
	<input type="submit" name="submit" id="submit" value="Opslaan en versturen">


</table>
		
</form>

	</body>
</html>