<?php 
//==================================================================================================
// CLASSES
//==================================================================================================

// Creatie
class Person
{
    public $firstName = "Rob";
    public $lastName = "Sannen";
    public $yearBorn = 1985;
}

// Instance aanmaken
$persoon = new Person();

// get property
echo nl2br("Mijn naam is ".$persoon->firstName.".\n"); // Mijn naam is Rob

// set property
$persoon->firstName = "Roberto";
echo nl2br("Ola mi nombre es ".$persoon->firstName.".\n"); // Mijn naam is Roberto


?>