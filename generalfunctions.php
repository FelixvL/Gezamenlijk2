<?php

function connectionDB() {

    $hostname = 'localhost';            // the credentials of the connection
    $databasenaam = 'sport_pool';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam); // the instantiation of the mysqli object, on object TOTALLY specialised in DATABAS MANAGEMENT
    return $conn;  // THAT object and connection is given back so that it can be catched at the call.
}

function createTagSelect($ParamConn, $selectidname) {
    $sql = "SELECT * FROM `elftal`;";   // Make a query for the DATABASE
    $erinResultSet = $ParamConn->query($sql); // THe execution of the SQL statement with ->query() on the mysql-object-parameter returns the RECORDSET in the variable ResultSet.

    $eruit = "<select  id=$selectidname onChange=checkdouble(); >";  // assign the <select> openings tag with id and event=functioncall as string  
    for ($x = 0; $x < $erinResultSet->num_rows; $x++) {// count the number of records in the recordset and make sure that the for loops that amount of times
        $row = $erinResultSet->fetch_assoc();  // Get the next record AS an array into the variable row
        $eruit .= "<option>";   // append new string information with .=
        $eruit .= $row['naam']; // make the option with only the naam out of the record set
        $eruit .= "</option>";
    }
    $eruit .= "</select>"; // <select closing tag


    return $eruit; // return the result
}


function createtable ($conn){
    
    $sql = "SELECT * FROM `elftal`;";
    $result = $conn->query($sql);
    echo "<table id=customers>";
    $TR= "<tr>";
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
      echo "<table id=customers>";
    return$TR;
        
}
    
 ?>   
