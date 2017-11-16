<?php

include 'generalfunctions.php';

$naamTeam = $_REQUEST['naam'];
$naamPlaats = $_REQUEST['plaats'];
echo $naamTeam;
echo $naamPlaats;
$connectie = connectionDB();
if (!$connectie->connect_error) {
    $sql = sprintf("SELECT * FROM elftal WHERE naam = '%s' ", $naamTeam);
//                $sql = sprintf("SELECT * FROM personen  WHERE naam = '%s' ", $paramNaam);

    $result = mysqli_query($connectie, $sql);
    if ($result->num_rows == 0) {
        header("Location: teams2.php?naam=$naamTeam&plaats=$naamPlaats");
    } else {
        $errorText = "Bestaat al";
        header("Location: teams2.php?errorText=$errorText");
    }
}


