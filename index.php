<?php

class Person {
    protected $name;
    protected $surname;
    protected $dateOfBirth;
    protected $placeOfBirth;
    protected $fiscalCode;

    public function __construct($name, $surname, $dateOfBirth, $placeOfBirth, $fiscalCode)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setDateOfBirth($dateOfBirth);
        $this->setPlaceOfBirth($placeOfBirth);
        $this->setFiscalCode($fiscalCode);

    }

    public function setName($name){
        $this -> name  = $name;
    }
    public function getName (){
        return $this -> name;
    }
    public function setSurname($surname){
        $this -> surname = $surname;
    }
    public function getSurname (){
        return $this -> surname;
    }
    public function setDateOfBirth($dateOfBirth){
        $this ->  dateOfBirth =  $dateOfBirth;
    }
    public function getDateOfBirth (){
        return $this -> dateOfBirth;
    }
    public function setPlaceOfBirth($placeOfBirth){
        $this -> placeOfBirth = $placeOfBirth;
    }
    public function getPlaceOfBirth (){
        return $this->placeOfBirth;
    }
    public function setFiscalCode($fiscalCode){
        $this -> fiscalCode = $fiscalCode;
    }
    public function getFiscalCode (){
        return $this -> fiscalCode;
    }

    public function getHtm(){
        echo $this->name . '<br>'
            . $this->surname . '<br>'
            . $this->dateOfBirth . '<br>'
            . $this->placeOfBirth . '<br>'
            . $this->fiscalCode . '<br>';
    }
}

$persona1 = new Person('Dan', 'ant', '20-01-2000', 'Milano', 'hgdugduhgdhwud');

$persona1->getHtm();