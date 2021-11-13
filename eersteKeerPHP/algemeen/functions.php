<?php 
//====================================================================================================================
// FUNCTIONS
//====================================================================================================================

//Hieronder een simpele functie
$eersteVariabele = 3;
$tweedeVariabele = 5;

function optellen($eerste, $tweede){
    echo $eerste + $tweede;
    echo nl2br("\n");  // \n kan ook voor new line
}

optellen($eersteVariabele, $tweedeVariabele);
//--------------------------------------------------

//Verwacht wordt dat de function changeVar() de globale variabele $derdeVar veranderd naar "variabele veranderd", 
//maar dit is niet het geval. $derdeVar binnen de functie is enkel beschikbaar binnen de functie
$derdeVar = "variabele";

function changeVar(){
    $derdeVar = "variabele veranderd";
}

changevar();
echo $derdeVar;
echo nl2br("\n");

//gebruik van het keyword global binnen de functie zorgt ervoor dat de variabele binnen de functie 
//globaal beschikbaar wordt.
function changeVarGlobal(){
    global $derdeVar;
    $derdeVar = "variabele veranderd";
}

changeVarGlobal();
echo $derdeVar;
echo nl2br("\n");
//--------------------------------------------------

//return functies werken zoal gewend
function getNameViaReturnFunction(){
    return "Rob";
}

echo getNameViaReturnFunction();
echo nl2br("\n");
//--------------------------------------------------

//Er bestaat iets genaamd variable functions in php
//Er wordt een variabele aangemaakt met de naam van de functie als string. Roep deze variabele op als een functie, 
//en je roept de variabele functie op.
function getAuthor(){
    echo "Charles Dickens";
}

$variableFunctionName = "getAuthor";
$variableFunctionName();
echo nl2br("\n");


?>