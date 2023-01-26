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

}