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


function createtable ($conn){
    
    $sql = "SELECT * FROM `elftal`;";
    $result = $conn->query($sql);
    
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
    return$TR;
        
}
    
 ?>   
