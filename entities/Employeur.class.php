<?php
class Employeur {

    private $numero_identification;
    private $denomination;
    private $raison_social;
    private $adresse; 
    
    
    function __construct(){

    }
    function getNumero_identification(){
        return $this->numero_identification;
    }
    function setNumero_identification($numero_identification){
        $this->numero_identification =$numero_identification;
        return $this;
    }

    function getRaison_social(){
        return $this->raison_social;
    }
    function setRaison_social($raison_social){
        $this->raison_social =$raison_social;
        return $this;
    }

    function getDenomination(){
        return $this->denomination;
    }
    function setDenomination($denomination){
        $this->denomination =$denomination;
        return $this;
    }

    function getAdresse(){
        return $this->adresse;
    }
    function setAdresse($adresse){
        $this->adresse =$adresse;
        return $this;
    }

}


?>