<?php 
//====================================================================================================================
// STRINGS
//====================================================================================================================

// String met single quotes geeft geen variabele waardes weer
// Escape character voor ' = \
$woord = 'vogel';
$zin = 'Beter 1 $woord in de hand dan 10 in de lucht, is Rob\'s filosofie';
echo $zin;
echo nl2br("\n");
//--------------------------------------------------

// String met double quotes geeft waarde van variabele weer die er wordt in geplaatst
// variabele kan ook tussen curly braces vb "{$plaats}e plaats"; ==> 1e plaats
$zin = "Beter 1 $woord in de hand dan 10 in de lucht";
echo $zin;
$zin = "Liever 2 {$woord}s in de hand dan 10 in de lucht";
echo nl2br("\n");
echo nl2br($zin."\n");
//--------------------------------------------------

// Concatenatie met de punt
echo nl2br($woord."s");  // C# => $"{woord}s"   of   woord + "s"
echo nl2br("\n");
echo nl2br($woord.'s'."\n");
//--------------------------------------------------

// Print is ongeveer hetzelfde als echo
print nl2br("FlexPulse, specialist in rijschoolsoftware\n");

//====================================================================================================================
// STRINGFUNCTIONS
//====================================================================================================================

// strtoupper / strtolower => ToUpper en ToLower
$naam = "Rob Sannen";
echo nl2br(strtoupper("$naam\n"));
echo nl2br(strtolower("$naam\n"));
//--------------------------------------------------

// strlen =>  String.Length
$lengte = strlen($naam);
echo nl2br("$lengte\n"); // 10
//--------------------------------------------------

// strpos => String position
echo strpos($naam, "Sannen"); // 4 => Rob Sannen => 0-index
echo nl2br("\n");
echo strpos($naam, "S"); // 4
echo nl2br("\n");
echo strpos($naam, "s"); // empty string? => hoofdlettergevoelig
echo nl2br("\n");
echo strpos($naam, "n"); // 6 => komt 3 keer voor, eerste wordt gegeven
echo nl2br("\n");
echo strpos($naam, "n", 7); // 7 => komt 3 keer voor, eerste wordt gegeven
echo nl2br("\n");
echo strpos($naam, "n", 8); // 9 => zoek vanaf index 8
echo nl2br("\n");
//--------------------------------------------------

//str_replace 
$replaced = str_replace("n", "s", $naam, $myCount) ; // myCount is optioneel zelfgekozen naam
echo nl2br($replaced."\n"); // Rob Sasses
echo nl2br($myCount."\n"); // 3 
//--------------------------------------------------

// substr
echo substr($naam, 5); // annen => vanf index 5
echo nl2br("\n");
echo substr($naam, -3); // nen => laatste 3
echo nl2br("\n");
echo substr($naam, 1, 2); // ob => vanaf index 1, 2 char
echo nl2br("\n");
echo substr($naam, 2, -2); // b Sann => vanaf index 2 tot einde -2
echo nl2br("\n");
//--------------------------------------------------

// str_split
$naamArray = str_split($naam); // geeft array per char, ook spaties ed
print_r($naamArray); // print_r om array te kunnen afdrukken
echo nl2br("\n");
$naamArray = str_split($naam, 3); // Array ( [0] => Rob [1] =>  Sa [2] => nne [3] => n )
print_r($naamArray); // print_r om array te kunnen afdrukken
echo nl2br("\n");


?>