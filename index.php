
<?php include 'generalfunctions.php'; ?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>


        <link rel = "stylesheet" type = "text/css" href="SportPool.css">
         <link rel = "stylesheet" type = "text/css" href="sportpoolCSS.css">

    </head>

    <body>
        
         <img src="voetbal.jpg" >

        <!--<a href="teams.php">maak teams aan</a>-->
        <form action="teams.php" method="get">
            <button type=submit value="teams"  >  teams aanmaken </button>
        </form>



        <br> kleine verbetering aa

       


        <?php
        connectionDB();
        $sql = "SELECT * FROM `elftal`;";
        $result = $conn->query($sql);
        echo "<select>";
        for ($x = 0; $x < $result->num_rows; $x++) {
            $row = $result->fetch_assoc();
            echo "<option>";
            echo $row['naam'];
            echo "</option>";
        }
        echo "</select>";
        



?>
         <center>
        <div style="overflow-x:auto; padding-top: 100px">
            <table style="border: 2px">
        <?php

        $sql = "SELECT * FROM `elftal`;";
        $result = $conn->query($sql);
        echo "<tr>";
        for ($x = 0; $x < $result->num_rows; $x++) {
            $row = $result->fetch_assoc();
            echo "<tr>";
            echo "<td>";
            echo $row['id'];
            echo "</td>";
            echo "<td>";
            echo $row['naam'];
            echo "</td>";
             echo "<td>";
            echo $row['plaats'];
            echo "</td>";
            echo "</tr>";
         
        }
        echo "</tr>";
        ?>  
            </table>
        </div>
</center>


        <br>


<?php include 'footer.php'; ?>
    </body>
</html>

