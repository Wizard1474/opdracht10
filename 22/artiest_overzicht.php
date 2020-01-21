
<!DOCTYPE html>
<html>
<head>
    <title>Band Toevoegen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

<div id="header-logo">
    <div class="header-wrapper">
        <img src="../img/header-logo.png" alt="">
    </div>
</div>

<header class="header">
    <div class="header-wrapper">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#" class="active">BANDS OVERZICHT</a></li>
            <li><a href="band_toevoeg.php">BANDS TOEVOEG</a></li>
            <li><a href="inlog.php">LOG IN</a></li>
            <li><a href="uitlog.php">UITLOGGEN</a></li>
        </ul>
    </div>
</header>

<div class="content">
    <div class="wrapper">

        <div id="bieden-list">
            <div id="bieden-header">

                <div id="bieden-counter">
                    <?php echo $aantal ?> Aanmeldingen
                </div>

                <div id="bieden-refresh">
                    <button onclick="reload()"><i class="fas fa-sync-alt"></i></button>
                </div>

                <?php
                require "config.php";

                $query = "SELECT * FROM back13_artiesten";

                $resultaat = mysqli_query($mysqli, $query);

                echo "<table id='bieden-table'>
					<tr>
					<th>Naam</th>
					<th>Instrument</th>
					<th>Geboortedatum</th>
					<th>Geslacht</th>
					<th>Info</th>
					<th>Band</th>
					</tr>";


                if (mysqli_num_rows($resultaat) == 0){
                    echo "<p> Er zijn geen resultaten gevonden</p>";
                } else {

                    while ($artiest = mysqli_fetch_array($resultaat)){
                        echo "<tr>";
                        echo "<td>" . $artiest['Naam'] . "</td>";
                        echo "<td>" . $artiest['Instrument'] . "</td>";
                        echo "<td>" . $artiest['Geboortedatum'] . "</td>";
                        echo "<td>" . $artiest['Geslacht'] . "</td>";
                        echo "<td>" . $artiest['Info'] . "</td>";
                        $idBand = $artiest['Band'];
                        $zoekBand = "SELECT Naam FROM back12_bands WHERE ID_band = " . $idBand;
                        $resultaatBand = mysqli_query($mysqli, $zoekBand);
                        $band = mysqli_fetch_array($resultaatBand);
                        echo "<td>" . $band['Naam'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                ?>
                </tr>
                </table>

            </div>
        </div>
    </div>
</div>

<div class="blockdivider"></div>

<footer></footer>

<script>
    function reload() {
        location.reload();
    }
</script>

</body>
</html>