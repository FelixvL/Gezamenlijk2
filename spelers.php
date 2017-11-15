<?php
$hostname = 'localhost';
$databasenaam = 'sport_pool';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password, $databasenaam);
if (isset($_GET['rugnummer'])) {
    $sql = "INSERT INTO `spelers`(`rugnummer`, `naam`)VALUES('" . $_GET['rugnummer'] . "','" . $_GET['naam'] . "')";
    $conn->query($sql);
}
?>

<html> 
    <head>
        
    </head>
    <body>
    <form action="teams.php" method="get"  >
            Rugnummer:<input type="text" name="naam">
            <br>
            Naam:<input type="text" name="plaats">
            <br>
            <input type="submit" value="invoegen">
        </form>
    </body>
    </html>