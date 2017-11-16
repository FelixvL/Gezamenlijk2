<?php
echo "IS it working".$_GET['teamSearch'];

   $hostname = 'localhost';            // the credentials of the connection
    $databasenaam = 'sport_pool';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam); // the instantiation of the mysqli object, on object TOTALLY specialised in DATABAS MANAGEMENT
    
    $sql = "SELECT * FROM `elftal` WHERE `naam` LIKE '%".$_GET['teamSearch']."%';";  
    $erinResultSet = $conn->query($sql); // THe execution of the SQL statement with ->query() on the mysql-object-parameter returns the RECORDSET in the variable ResultSet.
    $eruit="The teams are <br>";
    for ($x = 0; $x < $erinResultSet->num_rows; $x++) {// count the number of records in the recordset and make sure that the for loops that amount of times
        $row = $erinResultSet->fetch_assoc();  // Get the next record AS an array into the variable row
        $eruit .= $row['naam']; // make the option with only the naam out of the record set
        $eruit .= "<br>";
        
    }
    echo $eruit;

