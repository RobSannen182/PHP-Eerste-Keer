<?php
//====================================================================================================================
// Arrays
//====================================================================================================================

//================
// INDEXED ARRAYS
//=================

// inititalisatie array kan tussen () en []
$itemsArray = array("Hangmat", "zeil", "slaapzak");
$meerItemsArray = ["Hangmat", "zeil", "slaapzak", "luchtmatras", "lamp"]; // hier hoeft geen array voor te staan
print_r($itemsArray); 
echo nl2br("\n");
print_r($meerItemsArray); 
echo nl2br("\n");
//--------------------------------------------------

// Er kunnen verschillende types in eenzelfde array zitten
$mixedArray = array(10, 1.5, "Hallo", true);
print_r($mixedArray);
echo nl2br("\n");
//--------------------------------------------------

//====================
// ASSOCIATIVE ARRAYS
//====================

// Vergelijkbaar met C# dictionary => je geeft een key waarde mee 
$assoArray = [
    "zon" => "zomer", 
    "regen" => "herfst", 
    "sneeuw" => "winter"
];
print_r($assoArray);
echo nl2br("\n");
//--------------------------------------------------

// Je kan een mix van string en int keys meegeven, 
// geef je geen key mee krijgt value automatisch een int key
// deze zal 1 hoger zijn dan evt hoogste bestaande int key
$mixedAssoArray = [
    "zon" => "zomer", 
    "herfst", 
    3 => "winter",
    "lente"
];
print_r($mixedAssoArray);
echo nl2br("\n");
//--------------------------------------------------

//==============
// DATA OPHALEN
//==============

// Zoals verwacht
echo $meerItemsArray[2]; // slaapzak
echo nl2br("\n");
echo $assoArray["zon"]; // zomer
echo nl2br("\n");
echo $mixedAssoArray[3]; // winter
echo nl2br("\n");
//--------------------------------------------------

// Multidimensional arrays
$arrayArrays = [
    "arr1" => array(
        "arr1a" => array("a", "b", "c"),
        "arr1b" => array("d", "e", "f"),
        "arr1c" => array("g", "h", "i")
    ),
    "arr2" => array(
        "arr2a" => array(1, 2, 3),
        "arr2b" => array(4, 5, 6)
    )
];
echo($arrayArrays["arr1"]["arr1c"][2]); // i
echo nl2br("\n");

//====================
// ARRAY ADD FUNCTIES
//====================

// Achteraan toevoegen => 2 opties
array_push($itemsArray, "lamp"); // error als de array niet bestaat
$itemsArray[] = "liner"; // Dit is de beste manier => als de array niet bestaat wordt hij gemaakt
print_r($itemsArray);
echo nl2br("\n");
//--------------------------------------------------

// Toevoegen met key
$itemsArray[6] = "bijl";
print_r($itemsArray);
echo nl2br("\n");
$assoArray["groei"] = "lente";
print_r($assoArray);
echo nl2br("\n");
//--------------------------------------------------

//======================
// ARRAY REMOVE FUNCTIES
//======================

// laatste item verwijderen
// verwijderde value wordt opgeslagen in een variabele
$laatste = array_pop($itemsArray);
echo nl2br($laatste."\n"); // bijl
print_r($itemsArray); 
echo nl2br("\n"); 
//--------------------------------------------------

// Verwijderen op key
// !!!!!!!  => [0][1][2][3][4] => unset(array[1]) => wordt [0][2][3][4] niet [0][1][2][4]  !!!!!!!!!
unset($itemsArray[1]); // verwijder index 1 => zeil
print_r($itemsArray);
echo nl2br("\n");
unset($itemsArray[1]); // kan ook meerdere tegelijk
print_r($itemsArray);
unset($assoArray["zon"]); // zon is de key => zomer wordt verwijderd
echo nl2br("\n");
print_r($assoArray);
echo nl2br("\n");
//--------------------------------------------------

//==============
// FOREACH LOOP
//==============

// foreach op values
foreach($itemsArray as $item){
    echo nl2br($item."\n");
}
//--------------------------------------------------

// keyValuePair
foreach($assoArray as $key => $val){
    echo nl2br($val." (".$key.")\n");
}
//--------------------------------------------------

//================
// ARRAY SORTEREN
//================

// values alfabetisch sorteren => alleen indexed array 
// associative array sorteren => veranderd de array in een indexed array
// array wordt ook opnieuw genummerd [0][2][3][4] wordt [0][1][2][4] (zie hierboven)
sort($itemsArray);
print_r($itemsArray);
echo nl2br("\n");
//--------------------------------------------------

// asort behoud de keys => goed voor associative arrays
asort($assoArray); // values alfabetisch sorteren
print_r($assoArray);
echo nl2br("\n");
//--------------------------------------------------

// ksort => sorteren op keys => goed voor associative arrays
ksort($assoArray); // keys alfabetisch sorteren
print_r($assoArray);
echo nl2br("\n");
//--------------------------------------------------

//=============
// ARRAY COUNT
//=============

//inhoud tellen
echo(nl2br(count($itemsArray)."\n")); // 4
//--------------------------------------------------

//array van arrays
$arrayArrays = [
    "arr1" => array(
        "arr1a" => array("a", "b", "c"),
        "arr1b" => array("d", "e", "f"),
        "arr1c" => array("g", "h", "i")
    ),
    "arr2" => array(
        "arr2a" => array(1, 2, 3),
        "arr2b" => array(4, 5, 6)
    )
];
echo nl2br(count($arrayArrays)."\n"); // 2 => er zitten 2 arrays in de hoofdarray
echo nl2br(count($arrayArrays, COUNT_RECURSIVE)."\n"); // 22 => er zitten alles samen 22 items in de hoofdarray

//====================
// ARRAY ZOEKFUNCTIES
//====================

// zoek of key bestaat
echo array_key_exists(8, $meerItemsArray); // return null == false
echo nl2br("\n");
echo array_key_exists(2, $meerItemsArray); // return 1 == true
echo nl2br("\n");
echo array_key_exists(3, $mixedAssoArray); // return 1 == true
echo nl2br("\n");
echo array_key_exists("zon", $mixedAssoArray); // return 1 == true
echo nl2br("\n");
//--------------------------------------------------

// zoek of value bestaat
echo in_array("zon", $assoArray); // return null == false => zon is key
echo nl2br("\n");
echo in_array("zomer", $assoArray); // return 1 == true
echo nl2br("\n");
echo in_array("10", $mixedArray); // return 1 == true 
echo nl2br("\n");
echo in_array("10", $mixedArray, true); // return null  == false => 10 zit in $mixedArray als int, niet als string
echo nl2br("\n");
//--------------------------------------------------

?>
