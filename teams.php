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

            </script>
        
    </head>
    <body>
        <form action="index.php" method="get"   >
            <button type=submit value="teams"  >  terug </button>
        </form>

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