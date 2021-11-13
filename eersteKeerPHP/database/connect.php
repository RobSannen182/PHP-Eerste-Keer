<?php
//==================================================================================================
// DATABASE CONNECTION
//==================================================================================================

// Login credentials
$dbPassword = "RobSannen";
$dbUserName = "PHPOefenen";
$dbServer = "localhost";
$dbName = "PHPOefenen";

// connetie
$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

//-----------------
// connectie info
//-----------------

// print_r($connection);

//-------------------
// connectie sluiten
//-------------------

// $connection->close();

//-------------------
// Check for mysqli
//-------------------

// if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//     echo 'We don\'t have mysqli!!!';
// } else {
//     echo 'Phew we have it!';
// }

//-------
// Info
//-------

//phpinfo();

?>