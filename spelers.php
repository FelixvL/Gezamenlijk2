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
        <link rel = "stylesheet" type = "text/css" href="SportPool.css">       <!--  import van centrale css bestanden -->
        <link rel = "stylesheet" type = "text/css" href="sportpoolCSS.css"> 
        <style>
#spelers {            
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 20%;
}

#spelers td, #spelers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#spelers tr:nth-child(even){background-color: #f2f2f2;}

#spelers tr:hover {background-color: #ddd;}

#spelers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

        </style>
        
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
        
        
        
            <table style="border: 2px" id="spelers" cellspacing="0" cellpadding="0">
                <div style="overflow-x:auto; padding-top: 200px" style="border: 2px">
             
                <?php
                
                for ($x = 0; $x <1; $x++) {
                echo"<th width='40'>";echo"Rugnummer";echo"</th>";
                echo"<th>";echo"Naam Speler";echo"</th>";
    
                
                
                $sql = "SELECT `rugnummer`, `naam` FROM `spelers` ORDER BY `rugnummer` ASC;";
                $result = $conn->query($sql);
                echo "<tr>";
                for ($x = 0; $x < $result->num_rows; $x++) {
                    $row = $result->fetch_assoc();
                    echo "<tr>";
                    echo "<td>";
                    echo $row['rugnummer'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['naam'];
                    echo "</td>";
                    echo "</tr>";
                }
                }
                echo "</tr>";
                ?>  
            </table>
        </div>
        
        
        
        
    </body>
</html>