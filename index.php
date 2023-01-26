<?php

// Prima classe persona 
class persona{

    private $id;
    private $name;
    private $surname;
    private $dateOfBirth;
    private $birthPlace;
    private $fiscalCode;

    public function __construct($id, $name, $surname, $dateOfBirth, $birthPlace, $fiscalCode)
    {
        $this -> setId($id);
        $this -> setName($name);
        $this -> setSurname($surname);
        $this -> setDateOfBirth($dateOfBirth);
        $this -> setBirthPlace($birthPlace);
        $this -> setFiscalCode($fiscalCode);

    }

    public function getId(){

        return $this->id;
    }

    public function setId($id){

        $this->id = $id;
    }

    public function getName(){

        return $this->name;
    }

    public function setName($name){

        $this->name = $name;
    }

    public function getSurname(){
        
        return $this->surname;
    }

    public function setSurname($surname){

        $this->surname = $surname;
    }

    public function getDateOfBirth(){

        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth){

        $this->dateOfBirth = $dateOfBirth;
    }

    public function getBirthPlace(){

        return $this->birthPlace;
    }

    public function setBirthPlace($birthPlace){

        $this->birthPlace = $birthPlace;
    }

    public function getFiscalCode(){

        return $this->fiscalCode;
    }

    public function setFiscalCode($fiscalCode){

        $this->fiscalCode = $fiscalCode;
    }

    public function getHtml(){
        return "Id: " .  $this->getId() . "<br>"
            . "Nome: " . $this->getName() . "<br>"
            . "Cognome: " . $this->getSurname() . "<br>"
            . "Data di nascita: " . $this->getDateOfBirth() . "<br>"
            . "Luogo di nascita: " . $this->getBirthPlace() . "<br>"
            . "Codice fiscale: " . $this->getFiscalCode();
    }

}

// $persona1 = new persona(1, "Fabio", "Babaglioni", "19/11/2000", "Brescia", "BBGFBA00S19B157B");

// echo $persona1->getHtml();

class impiegato extends persona{

    private $hiringDate;

    public function __construct($id, $name, $surname, $dateOfBirth, $birthPlace, $fiscalCode, $hiringDate)
    {
        parent :: __construct($id, $name, $surname, $dateOfBirth, $birthPlace, $fiscalCode);

        $this -> setHiringDate($hiringDate);
    }

    public function getHiringDate(){

        return $this -> hiringDate;
    }

    public function setHiringDate($hiringDate){

        $this -> hiringDate = $hiringDate;
    }

    public function getHtml()
    {
        return "<h2> Impiegato </h2> <br>"
            . parent::getHtml() . "<br>"
            . "Data di assunzione: " . $this->getHiringDate();
    }

}

$impiegato = new impiegato(1, "Fabio", "Babaglioni", "19/11/2000", "Brescia", "BBGFBA00S19B157B", "20/05/2019");

echo $impiegato->getHtml();