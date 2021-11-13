<?php


include "connect.php";


//==================================================================================================
// PREPARED STATEMENTS  == voor queries met input van gebruiker (tegen sql-injection)
//==================================================================================================


// dit zou de gebruiker input zijn
$tempLastName = "Doyle";

// bij last_name staat een vraagteken omdat dit de waarde is die de gebruiker moet ingeven
$query = "SELECT first_name, last_name, pen_name FROM authors WHERE last_name = ?";
// ->prepare ipv ->query => Er wordt een statement aangemaakt 
$myStatementObj = $connection->prepare($query); 

// via bind param worden de ontbrekende gegevens aan de statement toegevoegd
// de eerste parameter is het gegevenstype => s = string, d = decimal, i = integer en b = blob
// de volgende parameters zijn de waardes die ipv de vraagtekens komen
// er kunnen meerdere vraagtekens van verschillende types zijn => vb: bind_params("sdi", $varString, $varFloat, $varInt)
// er kunnen enkel variabelen worden meegegeven, geen waardes => kan niet => bind_params("i", 25)
$myStatementObj->bind_param("s", $tempLastName);
// query wordt uitgevoerd
// bij bv een update was het hier klaar
$myStatementObj->execute();

// het resultaat van de query (firstname, lastname, penname) wordt in 3 variabelen gestoken
$myStatementObj->bind_result($firstName, $lastName, $penName);
// store result to bind_result variabelen
$myStatementObj->store_result();

if ($myStatementObj->num_rows > 0) {
    while($myStatementObj->fetch()){
        echo nl2br($firstName." ".$lastName." (".$penName.")".PHP_EOL);
    }
}

$myStatementObj->close();
$connection->close();



?>