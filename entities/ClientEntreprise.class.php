<?php
class ClientEntreprise {

    private $statut;
    private $denomination;
    private $ninea; 
    private $adresse; 
    private $telephone;
    private $mail; 
    
    function __construct(){

    }
    function getStatut(){
        return $this->statut;
    }
    function setStatut($statut){
        $this->statut =$statut;
        return $this;
    }

    function getDenomination(){
        return $this->denomination;
    }
    function setDenomination($denomination){
        $this->denomination =$denomination;
        return $this;
    }

    function getNinea(){
        return $this->ninea;
    }
    function setNinea($ninea){
        $this->ninea =$ninea;
        return $this;
    }


    function getAdresse(){
        return $this->adresse;
    }
    function setAdresse($adresse){
        $this->adresse =$adresse;
        return $this;
    }

    function getTelephone(){
        return $this->telephone;
    }
    function setTelephone($telephone){
        $this->telephone =$telephone;
        return $this;
    }


    function getMail(){
        return $this->mail;
    }
    function setMail($mail){
        $this->mail =$mail;
        return $this;
    }

}


?>