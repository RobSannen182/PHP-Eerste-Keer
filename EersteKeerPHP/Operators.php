<?php 
//==================================================================================================
// OPERATORS
//==================================================================================================

//===================
// REKENKUNDIG
//===================

echo nl2br(5 + 2);      // 7
echo nl2br(PHP_EOL);
echo nl2br(5 - 2);      // 3
echo nl2br(PHP_EOL);
echo nl2br(5 * 2);      // 10
echo nl2br(PHP_EOL);
echo nl2br(5 / 2);      // 2.5
echo nl2br(PHP_EOL);
//--------------------------------------------------

// modulo
echo nl2br(5 % 2);      // 1
echo nl2br(PHP_EOL);
//--------------------------------------------------

// macht
echo nl2br(5 ** 2);     // 5² => 25
echo nl2br(PHP_EOL);
//--------------------------------------------------

// increment
$getal = 5;
$getal ++; // = 6
--$getal; // = 5 => kan ook voor de variable

echo $getal++; // !!!!! 5 => ++ wordt na echo $getal uitgevoerd !!!!!
echo nl2br(PHP_EOL); // na echo is getal 6
echo ++$getal; // !!!!! 7 => ++ wordt voor echo $getal uitgevoerd !!!!!
echo nl2br(PHP_EOL);
//--------------------------------------------------

// assignment => zoals C#
$getal = 5;
$getal += 5;
echo $getal;            // 10
echo nl2br(PHP_EOL);
//--------------------------------------------------

//===================
// STRING
//===================

// concatenatie
$concat = "Hallo";
$concat = $concat." iedereen";
echo nl2br($concat.PHP_EOL); // Hallo iedereen
// OF
$concat = "Hallo";
$concat.= " iedereen";
echo nl2br($concat.PHP_EOL); // Hallo iedereen
//--------------------------------------------------

//=================
// VERGELIJKING
//=================

// Hetzelfde als C# + identical operator van JavaScript (===, !==)

var_dump($concat); // Geeft info over object mee => string(14) "Hallo iedereen"
echo nl2br(PHP_EOL);

var_dump(3 == 3); // bool(true)
echo nl2br(PHP_EOL);
var_dump( 3 != 3 ); // bool(false)
echo nl2br(PHP_EOL);
var_dump("3" == 3); // bool(true)
echo nl2br(PHP_EOL);
var_dump("3" === 3); // bool(false)
echo nl2br(PHP_EOL);
var_dump(3 <= 4); // bool(true)
echo nl2br(PHP_EOL);
var_dump(3 > 5); // bool(false)
echo nl2br(PHP_EOL);
//--------------------------------------------------

// SPACESHIP OPERATOR

//  <=> geeft -1 als <, 0 als =, 1 als >

echo(3 <=> 3);          // 0
echo nl2br(PHP_EOL);
echo(2 <=> 3);          // -1
echo nl2br(PHP_EOL);
echo(3 <=> 2);          // 1
echo nl2br(PHP_EOL);
//--------------------------------------------------

//=================
// LOGICA
//=================

// OR ||
$var1 = true;
$var2 = false;

var_dump($var1 or $var2); // bool(true)
echo nl2br(PHP_EOL);
// of
var_dump($var1 || $var2); // bool(true)
echo nl2br(PHP_EOL);
//--------------------------------------------------

// NOT  !
var_dump(!$var1); //bool(false)
echo nl2br(PHP_EOL);
//--------------------------------------------------

// AND  &&

var_dump($var1 and $var2); //bool(false)
echo nl2br(PHP_EOL);
// of
var_dump($var1 && $var2); //bool(false)
echo nl2br(PHP_EOL);
//--------------------------------------------------

?>