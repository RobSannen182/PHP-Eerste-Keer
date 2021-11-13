<?php 
//==================================================================================================
// IF STATEMENT
//==================================================================================================

$array = ["rob", "Bart", "Steven"];

if (count($array) == 1) {
    echo nl2br("Count is 1".PHP_EOL);
}
else if (count($array) > 1) {
    echo nl2br("Count is ".count($array).PHP_EOL);
}
else{
    echo nl2br("Count is 0".PHP_EOL);
}  
//--------------------------------------------------

//==================================================================================================
// TERNARY OPERATOR
//==================================================================================================

$ternaryUitkomst = (count($array) > 0) ? "Count > 0" : "No Count";
echo nl2br($ternaryUitkomst.PHP_EOL);
//--------------------------------------------------

//==================================================================================================
// NULL COALESCE OPERATOR
//==================================================================================================

// Als er een value zit in $iets => $uitkomst = $iets  => anders "NoValue"
$iets = "YesValue";
$uitkomst = $iets ?? "NoValue";
echo nl2br($uitkomst.PHP_EOL);

// Als er een value zit in $iets => $uitkomst = $iets  => zoniet probeer $nogIets => anders "NoValue"
$ietsAnders = "YesValue";
$nogIets = "AlsoValue";
$uitkomst = $ietsAnders ?? $nogIets ?? "NoValue";
echo nl2br($uitkomst.PHP_EOL);
//--------------------------------------------------

//==================================================================================================
// SWITCH STATEMENT
//==================================================================================================

switch(count($array))
{
    case 0: 
        echo nl2br("Count is 0".PHP_EOL);
        break;
    case 1: 
        echo nl2br("Count is 1".PHP_EOL);
        break;
    default:
        echo nl2br("Count is ".count($array).PHP_EOL);
        break;
}
//--------------------------------------------------

//==================================================================================================
// WHILE LOOP
//==================================================================================================

$var = "In The While Loop";
$teller = 0;
while ($teller < 2) {
    echo nl2br($var.PHP_EOL);
    $teller ++;
}

// Alternatieve syntax
$var = "In The Alt Syntax While Loop";
$teller = 0;
while ($teller < 2) :
    echo nl2br($var.PHP_EOL);
    $teller ++;
endwhile;
//--------------------------------------------------

//==================================================================================================
// FOR LOOP
//==================================================================================================

$var = "In The For Loop";
for ($i=0; $i < 2; $i++) { 
    echo nl2br($var.PHP_EOL);
}

// Alternatieve syntax
$var = "In The Alt Syntax For Loop";
for ($i=0; $i < 2; $i++) : 
    echo nl2br($var.PHP_EOL);
endfor;
//--------------------------------------------------

echo 'PHP version: '.phpversion();

?>