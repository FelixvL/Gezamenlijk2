<?php include 'generalfunctions.php'; ?>

<?php
$conn = connectionDB();

if (isset($_GET['naam'])) {
    $sql = "INSERT INTO `elftal`(`naam`, `plaats`)VALUES('" . $_GET['naam'] . "','" . $_GET['plaats'] . "')";
    $conn->query($sql);
//    echo $sql;
} 

if (isset($_GET['errorText'])) {
    echo $_GET['errorText'];
} 


?>


<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="SportPool.css">  
        <script>
            function searchTeam() {
                var searchString = document.getElementById("inputTextFieldTeam").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("teamDiv").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "searchTeams.php?teamSearch=" + searchString, true);
                xhttp.send();
            }
            function validate(form) {

                fail = validateNaam(form.naam.value,"Naam")
                fail += validateNaam(form.plaats.value,"Plaats")
                if (fail == "") {
                    ajaxCallJojo()
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
            function ajaxCallJojo() {
//                var xhttp = new XMLHttpRequest();
//                xhttp.onreadystatechange = function () {
//                    if (this.readyState == 4 && this.status == 200) {
////                        alert(xhttp.responseText);
//                     //   alert("in ajax");
//                    }
//                };
//                xhttp.open("GET", "komtTeamVoor.php", true);
//                xhttp.send();
            }
        </script>

    </head>
    <body>
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
        <img id="team" src="football_team_1978.jpg" >
        <div id="teamDiv">startText</div>
    </body>
</html>