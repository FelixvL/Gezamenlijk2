<?php
$hostname = 'localhost';
$databasenaam = 'sport_pool';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password, $databasenaam);
if (isset($_GET['rugnummer'])) {
    $sql = "INSERT INTO `spelers`(`rugnummer`, `naam`)VALUES('" . $_GET['rugnummer'] . "','" . $_GET['naam'] . "')";
    echo $sql;
    $conn->query($sql);
}
?>

<html> 
    <head>

    </head>
    <body>
        <form action="spelers.php" method="get"  >
            Rugnummer:<br>
            <input type="number" name="rugnummer" min="1" max="30">
            <br>
            Naam:<br>
            <input type="text" name="naam">
            <br>
            <input type="submit" value="invoegen">
        </form>
    </body>
</html>