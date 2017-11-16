
<?php include 'generalfunctions.php';    // IMPORT OF A CENTRAL file where we store functions in php that we want to use on multiple pages

?>


<html>
    <head>
        <meta charset="UTF-8">   <!-- A unified character set that makes sure that the browser knows which characterset to user  -->
        <title>Football Pool</title>         <!-- determining what is the title of the page displayed in tab and taskbar -->
        <link rel = "stylesheet" type = "text/css" href="SportPool.css">       <!--  import van centrale css bestanden -->
        <link rel = "stylesheet" type = "text/css" href="sportpoolCSS.css">
        <script  src="new.js"></script>  <!-- import of external js file called new.js -->
    </head>

    <body>

        
         <img id="voetbal" src="voetbal.jpg" >  <!--  afbeelding with the source voetbal.jpg and the id voetbal for JavaScript and CSS NOT PHP!!!!!-->


       
        

<button onclick="start()">start</button> <!-- display a button with the Javascript call start() ON THE EVENT of the mouseclick -->

<img id="myImage" src="soccer10.gif" style="width:100px"> <!-- displays the image and can be reached with the id myImage -->

<button onclick="jojo()">stop</button>  <!-- more or less the same as line 25 -->


        <form action="teams.php" method="get">  <!-- The form is normaly used to send information to a new file. That file is namen in the property action. Only if we had a textfield with a name for example, this value could be catched at the new php level -->
            <button type=submit value="teams"  >  teams aanmaken </button>  <!-- we misused the form to get the submit button to link to the new page -->
        </form>


        <button onclick="linken()" >Tweede poging</button>
        <button onclick="javascript:document.location='teams.php';" >Derde poging</button>
        <a href="teams.php">vier poging</a>


        <br> kleine verbetering aa


        <?php
        $conn = connectionDB();    // Call for a PHP function // We can not find it on this page SO it must be on the shared page generalfunctions.php
        echo createTagSelect($conn, "id1"); // THE FUNCTION is being Echoed VERY important because the string is in the function returned NOT echoed // 
        echo createTagSelect($conn, "id2");
        ?>
        <div style=" padding-top: 100px">   <!-- it a div, a small container with no functionality (that we can tell at this line) ONLY qua design we know that the padding at the top is 100 px-->
            <table style="border: 2px" id="customers" cellspacing="0" cellpadding="0"> <!-- the creation of a table opening tag -->
        <?php
         $conn = connectionDB();  
         echo createtable($conn);
         echo createtable($conn);
        
        ?>  
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
        
        


    <br>


        <?php include 'footer.php'; ?>

    

    </body>
</html>

