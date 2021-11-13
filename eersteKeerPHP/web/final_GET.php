<?php

// het form op index_GET.php heeft als method GET en als action final_GET.php waardoor we hier terecht komen
// de Get methode steekt alle waarden die zijn doorgegeven met het form in een associative array
// de name van de input is de Key en de waarde de value.
// de variabele is $_GET => via de php-tags zijn alle kvp's van $_GET binnen de html te raadplegen

echo "<pre>";
print_r($_GET);
echo "</pre>";

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP Fundamentals</title>
		<link href="assets/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="Header">
			<img src="assets/Dickens_Gurney_head.jpg" border="0" alt="">
			<h2>
				Mailing List Information
			</h2>
		</div>        
        <div id="Body">
            <div>
                <label>Favorite Author:</label> 
                <span><?= $_GET["author"] ?></span>
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span></span>
            </div>
            <div>
                <label>Comments:</label>
                <span> </span>
            </div>
            <div>
                <label>Name:</label>
                <span> </span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span> </span>
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span> </span>
            </div>
        </div>
	</body>
</html>