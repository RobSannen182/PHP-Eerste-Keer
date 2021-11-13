<?php
include "connect.php";

$query = "DELETE FROM authors WHERE id = 1";

$connection->query($query);

$connection->close();
?>