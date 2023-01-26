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

    public function getHtml(){
        return $this->name . '<br>'
            . $this->surname . '<br>'
            . $this->dateOfBirth . '<br>'
            . $this->placeOfBirth . '<br>'
            . $this->fiscalCode . '<br>';
    }
}

class Employee extends Person{
    private $hireDate;
    private Salary $salary;

    public function __construct($hireDate, $name, $surname, $dateOfBirth, $placeOfBirth, $fiscalCode, Salary $salary)
    {
        $this->setHireDate($hireDate);
        $this->setSalary($salary);
        parent::__construct($name, $surname, $dateOfBirth, $placeOfBirth, $fiscalCode);
    }

    public function setHireDate($hireDate){
        $this->hireDate = $hireDate;
    }
    public function getHireDate(){
        return $this->hireDate;
    }
    public function setSalary(Salary $salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function getHtml()
    {
        echo parent::getHtml() . $this-> hireDate .'<br>'. $this->getSalary()-> calcSalary()  . ' &euro;';
    }
}

class Manager extends Person{
    private $dividend;
    private $bonus;

    public function __construct($dividend, $bonus, $name, $surname, $dateOfBirth, $placeOfBirth, $fiscalCode)
    {
        $this->setDividend($dividend);
        $this->setBonus($bonus);
        parent::__construct($name, $surname, $dateOfBirth, $placeOfBirth, $fiscalCode);
    }

    public function setDividend($dividend){
        $this->dividend = $dividend;
    }
    public function getDividend(){
        return $this->dividend;
    }
    public function setBonus($bonus){
        $this->bonus = $bonus;
    }
    public function getBonus(){
        return $this->bonus;
    }
    public function getSalary(){
        return ($this->dividend * 12) + $this->bonus; 
    }

    public function getHtml()
    {
        echo parent::getHtml() 
        . $this-> getSalary() . ' &euro;';
    }
}

class Salary{
    private $monthlySalary;
    private $thirteenth;
    private $fourteenth;

    public function __construct($monthlySalary,$thirteenth,$fourteenth)
    {
        $this->setmonthlySalary($monthlySalary);
        $this->setthirteenth($thirteenth);
        $this->setfourteenth($fourteenth);
    }
    public function setmonthlySalary($monthlySalary){
        $this->monthlySalary = $monthlySalary;
    }
    public function getmonthlySalary(){
        return $this->monthlySalary;
    }public function setthirteenth($thirteenth){
        $this->thirteenth = $thirteenth;
    }
    public function getthirteenth(){
        return $this->thirteenth;
    }public function setfourteenth($fourteenth){
        $this->fourteenth = $fourteenth;
    }
    public function getfourteenth(){
        return $this->fourteenth;
    }
    public function calcSalary(){
        $mount = 12;
        if($this->thirteenth){
            $mount += 1;

            if($this->fourteenth){
                $mount += 1; 
            }
        }
        return $this->monthlySalary * $mount;
    }
}





$persona1 = new Employee('20-01-2010','Dan', 'ant', '20-01-2000', 'Milano', 'hgdugduhgdhwud',new Salary(1000, true, true));
$capo1 = new Manager('2000',1000,'Dan', 'ant', '20-01-2000', 'Milano', 'hgdugduhgdhwud');

$persona1->getHtml();
echo '<hr>';
$capo1->getHtml();

echo '<br><hr><br>';
