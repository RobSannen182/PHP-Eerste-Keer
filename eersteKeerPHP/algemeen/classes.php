<?php 
//==================================================================================================
// CLASSES
//==================================================================================================

// Creatie van een klasse zonder ctor
class Person
{
    const AVG_LIFE_SPAN = 82; // Dit is de schrijfwijze van een constante

    public $firstName = "Rob";
    public $lastName = "Sannen";
    public $yearBorn = 1985;
}
//--------------------------------------------------

// Instance aanmaken
$persoon = new Person();
//--------------------------------------------------

// get property
echo nl2br("Mijn naam is ".$persoon->firstName.".\n"); // Mijn naam is Rob
//--------------------------------------------------

// get const value
echo nl2br($persoon::AVG_LIFE_SPAN."\n"); // 82
// of
echo nl2br(Person::AVG_LIFE_SPAN.PHP_EOL); //82
//--------------------------------------------------

// set property
$persoon->firstName = "Roberto";
echo nl2br("Ola mi nombre es ".$persoon->firstName.".\n"); // Mijn naam is Roberto
//--------------------------------------------------
//--------------------------------------------------

// Creatie van een klasse met ctor en methods (get, set)
class Employee
{
    public function __construct($employeeNr = "", $function = "", $startDate = "") 
    {
        $this->employeeNr = $employeeNr; 
        $this->function = $function;
        $this->startDate = $startDate;
    }

    public $employeeNr;
    public $function;
    public $startDate;

    public function getEmployeeNr()
    {
        return $this->employeeNr;
    }

    public function setEmployeeNr($temp)
    {
        $this->employeeNr = $temp;
    }
}

$myEmployee = new Employee(23, "CEO", "23/06/2021");
echo nl2br($myEmployee->getEmployeeNr()."\n"); // 23
//--------------------------------------------------

//=============
// INHERITANCE
//=============

class BetterPerson
{
    const AVG_LIFE_SPAN = 82; // Dit is de schrijfwijze van een constante

    protected $firstName ; // protected => alleen overervende klasses kunnen hier aan => Student
    protected $lastName ;
    private $yearBorn ; // alleen beschikbaar binnen deze klasse

    public function __construct($tempFirst="", $tempLast="", $tempBorn="") {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($temp)
    {
        $this->firstName = $temp;
    }
}


// Student erft over van Person
class Student extends BetterPerson
{
    protected $studNr;

    public function getStudentNr()
    {
        return $this->studNr;
    }

    public function getFullName()
    {
        return $this->firstName." ".$this->lastName; // Dit zijn properties uit de Person Class
    }
}

$student = new Student("Rob", "Sannen", "1985");
echo nl2br($student->getFullName().PHP_EOL); // Rob Sannen
echo nl2br($student->yearBorn.PHP_EOL); // FOUT => is private.
//--------------------------------------------------

//==================
// STATIC VARIABLES
//==================

// je kan static variables en methods van een klasse gebruijken zonder een instantie van de klasse te creëren
class StaticPerson
{
    public static $length = 180; // static prop

    public $firstName;
    public $lastName;
    public $yearBorn;

    public function __construct($tempFirst="", $tempLast="", $tempBorn="") {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public static function getLength(){ // static method
        return self::$length; // omdat $length static is => self ipv $this
    }
}

echo StaticPerson::$length; // static prop opvragen uit StaticPerson class => 180 
echo(nl2br("\n"));
echo StaticPerson::getLength(); // static method opvragen uit StaticPerson class => 180
echo(nl2br(PHP_EOL));
//--------------------------------------------------

//===================
// INCLUDE / REQUIRE
//===================

// De class FiledPerson zit in een aparte file FiledPerson.php

// File hier beschikbaar maken
include "FiledPerson.php";

$fp = new filedPerson("Bob", "Peeters", "1985");
echo(nl2br($fp->getFullName().PHP_EOL));

// bij include_once kan er maar 1 instantie worden aangemaakt van FiledPerson

// Require is hetzelfe

// Bij include gaat het script verder als de file niet gevonden is, bij require stopt het script
//--------------------------------------------------


?>