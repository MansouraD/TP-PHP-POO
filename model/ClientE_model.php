<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/Base.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/entities/ClientEntreprise.class.php');

class ClientE_model extends Base {
    
    function __construct(){
        parent::__construct();
    }

    function ajouterClientEntreprise(ClientEntreprise $cliententreprise){
        $requeteInsertion ="INSERT INTO client_entreprise(statut, denomination, ninea, adresse, telephone, mail) 
        VALUES('".$cliententreprise->getStatut()."', '".$cliententreprise->getDenomination()."', '".$cliententreprise->getNinea()."', '".$cliententreprise->getAdresse()."', '".$cliententreprise->getTelephone()."', '".$cliententreprise->getMail()."')";
        
        if($this->base !=null){
            //return mysqli_query($this->base, $requeteInsertion);
            return $this->base->exec($requeteInsertion); 
        }else{
            return null;
        }
        
        
    }



}


?>