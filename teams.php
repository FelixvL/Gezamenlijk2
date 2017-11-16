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
        <script>
            
             function validate(form) {
                fail = validateNaam(form.naam.value)

                if (fail == "")
                    return true
                else {
                    alert(fail);
                    return false
                }
            }

            function validateNaam(field)
            {
//                alert(field);
                var pattern = new RegExp(/[()~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/); //unacceptable chars
                if (pattern.test(field)) {
                    return ("Gebruik alleen alpha en numerieke characters");
                }
                if (field == "") {
                    return "Naam mag niet leeg zijn";
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
<<<<<<< HEAD
        
        <script  src="new.js"></script>

<button onclick="start()">start</button>

<img id="myImage" src="soccer10.gif" style="width:100px">

<button onclick="jojo()">stop</button>
 
         <img src="voetbal.jpg" >
        <!--<a href="index.php">terug</a>-->
        <form action="index.php" method="get">
=======
        <form action="index.php" method="get"   >
>>>>>>> 4657424925b18621cd290f9e3bc09f8d67ee1a54
            <button type=submit value="teams"  >  terug </button>
        </form>
        <input type="button" onclick="ajaxCallJojo()" value="HIERKLIKKEN">
        <form action="teams.php" method="get"  onsubmit="return  validate(this)">
            Naam:<input type="text" name="naam">
            <br>
            Plaats:<input type="text" name="plaats">
            <br>
            <input type="submit" value="voeg toe">
        </form>
        <img id="team" src="football_team_1978.jpg" >
    </body>
</html>