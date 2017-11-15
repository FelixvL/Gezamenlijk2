<?php include 'generalfunctions.php'; ?>

<?php
connectionDB();
if (isset($_GET['naam'])) {
    $sql = "INSERT INTO `elftal`(`naam`, `plaats`)VALUES('" . $_GET['naam'] . "','" . $_GET['plaats'] . "')";
    $conn->query($sql);
}
?>


<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="SportPool.css">  
    </head>
    <body>
        <!--<a href="index.php">terug</a>-->
        <form action="index.php" method="get">
            <button type=submit value="teams"  >  terug </button>
        </form>

        <form action="teams.php" method="get"  >
            Naam:<input type="text" name="naam">
            <br>
            Plaats:<input type="text" name="plaats">
            <br>
            <input type="submit" value="voeg toe">
        </form>
    </body>
</html>