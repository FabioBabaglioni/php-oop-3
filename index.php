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

    private stipendio $stipendio;
    private $hiringDate;

    public function __construct($id, $name, $surname, $dateOfBirth, $birthPlace, $fiscalCode, $hiringDate, $stipendio)
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

class stipendio{
    private $mensile;
    private $tredicesima;
    private $quattordicesima;

    public function __construct($mensile, $tredicesima, $quattordicesima)
    {
        $this->setMensile($mensile);
        $this->setTredicesima($tredicesima);
        $this->setQuattordicesima($quattordicesima);
    }

    public function getMensile(){
        return $this->mensile;
    }

    public function setMensile($mensile){
        $this->mensile = $mensile;
    }

    public function getTredicesima(){
        return $this->tredicesima;
    }
    
    public function setTredicesima($tredicesima){
        $this->tredicesima = $tredicesima;
    }

    public function getQuattordicesima(){
        return $this->quattordicesima;
    }

    public function setQuattordicesima($quattordicesima){
        $this->quattordicesima = $quattordicesima;
    }
}

class amministratore extends persona{
    private $dividendo;
    private $bonus;

    public function __construct($id, $name, $surname, $dateOfBirth, $birthPlace, $fiscalCode, $dividendo, $bonus)
    {
        parent::__construct($id, $name, $surname, $dateOfBirth, $birthPlace, $fiscalCode);

        $this->setDividendo($dividendo);
        $this->setBonus($bonus);
    }

    public function getDividendo(){
        return $this->dividendo;
    }
    
    public function setDividendo($dividendo){
        $this->dividendo = $dividendo;
    }
    
    public function getBonus(){
        return $this->bonus;
    }

    public function setBonus($bonus){
        $this->bonus = $bonus;
    }

    // setto il compenso dell'amministratore
    public function calcoloCompenso(){
        return ($this->dividendo*12) + $this->bonus;
    }

    public function getHtml()
    {
        return "<h2> Amministratore </h2> <br>"
            . parent::getHtml() . "<br>"
            . "Dividendo: € " . $this->getDividendo() . "<br>"
            . "Bonus: € " . $this->getBonus() . "<br>"
            . "Compenso: € " . $this->calcoloCompenso();
    }
}

$amministratore = new amministratore(1, "Chiara", "Plebani", "10/10/1990", "Brescia", "PLBCHR05A57B157B", 25000, 20000);

echo $amministratore->getHtml();