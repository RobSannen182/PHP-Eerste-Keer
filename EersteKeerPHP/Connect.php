<?php
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

// $dbPassword = "RobSannen";
// $dbUserName = "PHPOefenen";
// $dbServer = "localhost";
// $dbName = "PHPOefenen";

// $connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

// print_r($connection);

phpinfo();

?>