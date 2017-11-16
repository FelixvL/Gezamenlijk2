<?php include 'generalfunctions.php'; ?>

<?php
$conn=connectionDB();
if (isset($_GET['naam'])) {
    $sql = "INSERT INTO `elftal`(`naam`, `plaats`)VALUES('" . $_GET['naam'] . "','" . $_GET['plaats'] . "')";
    $conn->query($sql);
}
if (isset($_GET['errorText'])) {
    echo $_GET['errorText'];
} 
?>


<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="SportPool.css">  
         <script  src="new.js"></script>  <!-- import of external js file called new.js -->
        <script>
                function searchTeam(){
                var searchString = document.getElementById("inputTextFieldTeam").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("teamDiv").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "searchTeams.php?teamSearch="+searchString, true);
                xhttp.send();                    
                }
             function validate(form) {
                 fail = validateNaam(form.naam.value,"Naam")
                fail += validateNaam(form.plaats.value,"Plaats")
                if (fail == "") {
//                    ajaxCallJojo()
                    return true
                } else {
                    alert(fail);
                    return false
                }
            }

            function validateNaam(field,paramVeld)
            {
//                alert(field);
                var pattern = new RegExp(/[()~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/); //unacceptable chars
                if (pattern.test(field)) {
                    return ("Gebruik alleen alpha en numerieke characters");
                }
                if (field == "") {
                    return paramVeld+" mag niet leeg zijn  ";
                }
                return "";
            }
            function ajaxCallJojo(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(xhttp.responseText);
                    }
                };
                xhttp.open("GET", "voorbeeld.php", true);
                xhttp.send();
            }
            </script>
        
    </head>
    <body>

        
        <header> Football Pool </header>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.php" class="active">Home</a>
                <a href="teams.php"> Teams </a>
                <a href="#players">Players </a>
                <a href="#matches">Matches</a>
                <a href="#about">About</a>
            </div>
        </nav>

            <input type="text" onkeyup="searchTeam()" id="inputTextFieldTeam" >

        <form action="index.php" method="get"   >

            <button type=submit value="teams"  >  terug </button>
        </form>

        <input type="button" onclick="ajaxCallJojo()" value="HIERKLIKKEN">
        <!--<form action="teams2.php" method="get"  onsubmit="return  validate(this)">-->
        <form action="komtTeamVoor.php" method="get"  onsubmit="return  validate(this)">

            Naam:<input type="text" name="naam">
            <br>
            Plaats:<input type="text" name="plaats">
            <br>
            <input type="submit" value="voeg toe">
        </form>

        
        <form action="spelers.php" method="get">
            <button type=submit value="speler" > spelers </button>
        </form>

        <img id="team" src="football_team_1978.jpg" >
        <div id="teamDiv">startText</div>
        
        
        <?php

        
         $hostname = 'localhost';            // the credentials of the connection
         $databasenaam = 'sport_pool';
         $username = 'root';
         $password = '';

           $conn = new mysqli($hostname, $username, $password, $databasenaam);
      echo "<table border = 2px color = black >";
             $sql = "SELECT * FROM `elftal`";
            $result = $conn->query($sql);
                    for ($x = 0; $x <1; $x++) {
            echo"<th>";echo"Team Id";echo"</th>";
            echo"<th>";echo"Team a";echo"</th>";
            echo"<th>";echo"Team place";echo"</th>";
    }
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
     echo"</tr>";
    // Create connection
$conn = new mysqli($hostname, $username, $password, $databasenaam);
// Check connection


$conn->close();
?>
        ?>
        
        
        
       <button onclick="Delete()">Delete</button>
       

    </body>
</html>