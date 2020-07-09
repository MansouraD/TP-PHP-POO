<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/Base.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/entities/ClientParticulier.class.php');


class ClientP_model extends Base {
    
    function __construct(){
        parent::__construct();
    }
    function ajouterClientParticulier(ClientParticulier $clientparticulier){

        $requeteInsertion = "INSERT INTO client_particulier (nom, prenom, date_de_naissance, cni, adresse, téléphone, email, profession, statut, salaire)
        VALUES ('".$clientparticulier->getNom()."', '".$clientparticulier->getPrenom()."', '".$clientparticulier->getDate_de_naissance()."', '".$clientparticulier->getCni()."', '".$clientparticulier->getAdresse()."', '".$clientparticulier->getTéléphone()."', '".$clientparticulier->getEmail()."', '".$clientparticulier->getProfession()."',  '".$clientparticulier->getStatut()."',  '".$clientparticulier->getSalaire()."')";

        if($this->base !=null){
            return $this->base->exec($requeteInsertion);
        }else{
            return null;
        }
    
    }
    



}


?>