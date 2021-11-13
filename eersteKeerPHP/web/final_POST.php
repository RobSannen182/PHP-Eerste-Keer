<?php

// het verschil tussen get en post is dat bij post de waardes die worden doorgegeven niet in de url komen te staan
// het form op index_POST.php heeft als method POST en als action final_POST.php waardoor we hier terecht komen
// de POST methode steekt alle waarden die zijn doorgegeven met het form in een associative array
// de name van de input is de Key en de waarde de value. 
// => omdat er voor century meer dan 1 keuze kan zijn is de name="century[]" => array van gekozen waardes
// de variabele is $_POST => via de php-tags zijn alle kvp's van $_POST binnen de html te raadplegen

echo "<pre>";
print_r($_POST);
echo "</pre>";

$cent = $_POST["century"];
$favCent = $cent[0];
if (count($cent) >1) {
    for ($i=1; $i < (count($cent)); $i++) { 
        $favCent .= ", ".$cent[$i];
    }
}

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
                <span><?= $_POST["author"] ?>&nbsp; </span>
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span><?= $favCent ?> &nbsp;</span>
            </div>
            <div>
                <label>Comments:</label>
                <span><?= $_POST["comments"] ?> &nbsp;</span>
            </div>
            <div>
                <label>Name:</label>
                <span><?= $_POST["name"] ?> &nbsp;</span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span><?= $_POST["email"]?> &nbsp;</span>
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span><?= $_POST["newsletter"] ?> &nbsp;</span>
            </div>
        </div>
	</body>
</html>