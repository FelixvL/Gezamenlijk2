
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
        $conn = connectionDB();
        echo createTagSelect($conn);
        echo createTagSelect($conn);
        ?>
        
        
        
        
        <div style=" padding-top: 100px">
            <table style="border: 2px" id="customers" cellspacing="0" cellpadding="0">
        <?php
         $conn = connectionDB();
         echo createtable($conn);
         echo createtable($conn);
        
        ?>  
            </table>
        </div>
        
        


    <br>



<?php include 'footer.php'; ?>
</body>
</html>

