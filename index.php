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
        $this -> setId($Id);
        $this -> setName($name);
        $this -> setSurname($surname);
        $this -> setDateOfBirth($dateOfBirth);
        $this -> setBirthPlace($birthPlace);
        $this -> setFiscalCode($fiscalCode);

    }

}