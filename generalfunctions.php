<?php

function connectionDB() {
    global $conn;
    $hostname = 'localhost';
    $databasenaam = 'sport_pool';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam);
}
?>