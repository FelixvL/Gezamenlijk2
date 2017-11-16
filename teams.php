<?php include 'generalfunctions.php'; ?>

<?php
$conn=connectionDB();
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
        
        <script  src="new.js"></script>

<button onclick="start()">start</button>

<img id="myImage" src="soccer10.gif" style="width:100px">

<button onclick="jojo()">stop</button>
 
         <img src="voetbal.jpg" >
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