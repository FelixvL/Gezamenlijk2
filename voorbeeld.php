<?php

    $hostname = 'localhost';
    $databasenaam = 'sport_pool';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    $sql = "INSERT INTO `elftal`(`naam`, `plaats`)VALUES('ziejewel','ziejewel')";
    $conn->query($sql);
    echo "voorbeeldtekst";