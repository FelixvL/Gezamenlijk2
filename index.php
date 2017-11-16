
<?php include 'generalfunctions.php';    // IMPORT OF A CENTRAL file where we store functions in php that we want to use on multiple pages
?>


<html>
    <head>
        <meta charset="UTF-8">   <!-- A unified character set that makes sure that the browser knows which characterset to user  -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Football Pool</title>         <!-- determining what is the title of the page displayed in tab and taskbar -->
        <link rel = "stylesheet" type = "text/css" href="SportPool.css">       <!--  import van centrale css bestanden -->

    </head>

    <body>

        <header>Football Pool</header>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.php" class="active">Home</a>
                <a href="teams.php"> Teams </a>
                <a href="#players">Players </a>
                <a href="#matches">Matches</a>
                <a href="#about">About</a>
            </div>
        </nav>
        <div id="selectdiv">


            <?php
            $conn = connectionDB();    // Call for a PHP function // We can not find it on this page SO it must be on the shared page generalfunctions.php
            echo createTagSelect($conn, "id1"); // THE FUNCTION is being Echoed VERY important because the string is in the function returned NOT echoed // 
            echo createTagSelect($conn, "id2");
            ?>
        </div>
        <div id="teamtable">
             <?php
            $conn = connectionDB();
            echo createtable($conn);
            ?>  
        </div>
       
        <script>
            function checkdouble() {
                x = document.getElementById("id1").selectedIndex;
                y = document.getElementById("id2").selectedIndex;
                if (x === y)
                {
                    alert("Please choose different teams");
                }else
                    alert ("we will show the new time in the table");
                    insidetext();
            }

        </script>

        <?php include 'footer.php'; ?>

    

    </body>
</html>

