<?php 
class FiledPerson
{
    public function __construct($tempFirst = "", $tempLast = "", $tempBorn = "") 
    {
        $this->firstName = $tempFirst; 
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public $firstName;
    public $lastName;
    public $yearBorn;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($temp)
    {
        $this->firstName = $temp;
    }

    public function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }
}


?>