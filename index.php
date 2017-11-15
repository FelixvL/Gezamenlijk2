
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

       
        <script  src="new.js"></script>

<button onclick="start()">start</button>

<img id="myImage" src="soccer10.gif" style="width:100px">

<button onclick="jojo()">stop</button>


        <form action="teams.php" method="get">
            <button type=submit value="teams"  >  teams aanmaken </button>
        </form>

        <br> kleine verbetering aa


        <?php
        $conn = connectionDB();
        echo createTagSelect($conn, "id1");
        echo createTagSelect($conn, "id2");
        ?>
        <script>
            function checkdouble() {
                x = document.getElementById("id1").selectedIndex;
                y = document.getElementById("id2").selectedIndex;
                if (x === y)
                {
                    alert("Please choose different teams");
                }

            }

        </script>
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

