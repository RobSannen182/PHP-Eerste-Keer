<?php
//==================================================================================================
// INSERT - UPDATE - DELETE
//==================================================================================================

//====================
// INCLUDE CONNECTION
//====================

include "connect.php";
//--------------------------------------------------

//====================
// INSERT
//====================

//$query = "INSERT INTO authors (first_name, last_name, pen_name) Values('Arthur Ignatius Conan', 'Doyle', 'Sir Arthur Ignatius Doyle')" ;
//$connection->query($query); // query uitvoeren
//--------------------------------------------------

//====================
// UPDATE
//====================

//$query = "UPDATE authors SET pen_name = 'L.M. Montgomery' WHERE last_name = 'Montgomery'";
//$connection->query($query);
//--------------------------------------------------

//====================
// DELETE
//====================

//$query = "DELETE FROM authors WHERE id = 1";
//$connection->query($query);
//--------------------------------------------------

//=====================
// GET ID AFTER INSERT
//=====================

//$query = "INSERT INTO authors (first_name, last_name, pen_name) Values('John Ronald Reuel', 'Tolkien', 'J.R.R. Tolkien')" ;
//$connection->query($query); // query uitvoeren

//echo "Newly created author id: ".$connection->insert_id;
//--------------------------------------------------

//==================================================================================================
// SELECT
//==================================================================================================

$query = "SELECT first_name, last_name, pen_name FROM authors ORDER BY last_name";

// Het resultaat van deze query zal een mySQLiResultObject zijn
// x aantal rijen met first_name, last_name en pen_name (C# DataTable)
$myResultObj = $connection->query($query); 

// mySQLiResultObject methode num_rows geeft aantal rijen
$aantalRijen = $myResultObj->num_rows;
print_r($aantalRijen);
echo nl2br(PHP_EOL);
// mySQLiResultObject methode ->fetch_assoc() geeft eerste rij als associative array
// kolomnaam is Key en waarde is Value
// elke keer deze methode wordt opgeroepen wordt een volgende rij gegeven
$eenRij = $myResultObj->fetch_assoc();
print_r($eenRij);
echo nl2br(PHP_EOL);
$nogEenRij = $myResultObj->fetch_assoc();
print_r($nogEenRij);
echo nl2br(PHP_EOL);

if ($aantalRijen > 0) {
    
    // Deze While loopt over de rest van de rijen en toont een kolomwaarde ipv de array rij
    // Als er eenmaal over alle rijen geloopt is via fetch_assoc() kunnen er geen rijen meer 
    // worden opgevraagd via deze methode???? 
    while ($rij = $myResultObj->fetch_assoc()) {
        echo nl2br("Author: ".$rij["last_name"]);
        echo nl2br(PHP_EOL);
    }
}

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

$myResultObj->close();

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

$connection->close();

?>