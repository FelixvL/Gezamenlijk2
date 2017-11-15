<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        
        <link rel = "stylesheet" type = "text/css" href="SportPool.css">
       
    </head>
   
    <body>
        <form action="teams.php" method="get">
            <button type=submit value="teams"  >  teams aanmaken </button>
        </form>
            
            
        
        <br> kleine verbetering aa


<?php

    $hostname='localhost';
    $databasenaam='sport_pool';
    $username='root';
    $password='';
    
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    $sql = "SELECT * FROM `elftal`;";
    $result = $conn->query($sql);
    echo "<select>";
    for($x = 0; $x < $result->num_rows; $x++){
        $row = $result->fetch_assoc();
        echo "<option>";
        echo $row['naam'];
        echo "</option>";
    }
    echo "</select>";
        

?>
        <br>
       


        <?php include 'footer.php'; ?>
    </body>
</html>