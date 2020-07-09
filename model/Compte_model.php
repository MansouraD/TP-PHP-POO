<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/Base.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/entities/Compte.class.php');

class Compte_model extends Base {
    
    function __construct(){
        parent::__construct();
    }

    function ajouterCompte(Compte $compte){
        $requeteInsertion ="INSERT INTO compte(type_compte, agence, numero_compte, cle_rib, frais_ouverture, _cni, _ninea) 
        VALUES('".$compte->getType_compte()."', '".$compte->getAgence()."', '".$compte->getNumero_compte()."', '".$compte->getCle_rib()."', '".$compte->getFrais_ouverture()."', '".$compte->get_Cni()."', '".$compte->get_Ninea()."')";
        
    
        if($this->base !=null){
            //return mysqli_query($this->base, $requeteInsertion);
            return $this->base->exec($requeteInsertion); 
        }else{
            return null;
        }
        
        
    }



}


?>