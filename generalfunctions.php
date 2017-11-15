<?php

function connectionDB() {

    $hostname = 'localhost';
    $databasenaam = 'sport_pool';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    return $conn;
}

function createTagSelect($ParamConn) {
    $sql = "SELECT * FROM `elftal`;";
    $erinResultSet = $ParamConn->query($sql);

    $eruit = "<select>";
    for ($x = 0; $x < $erinResultSet->num_rows; $x++) {
        $row = $erinResultSet->fetch_assoc();
        $eruit .= "<option>";
        $eruit .= $row['naam'];
        $eruit .= "</option>";
    }
    $eruit .= "</select>";


    return $eruit;
}

?>