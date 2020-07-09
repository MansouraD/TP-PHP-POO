<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/entities/ClientParticulier.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/entities/ClientEntreprise.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/entities/Compte.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/entities/Employeur.class.php');

require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/Base.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/ClientP_model.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/ClientE_model.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/Compte_model.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/POO/model/Employeur_model.php');


if(isset($_POST['soumettre'])){
    extract($_POST);

    if($_POST['check1']=='Particulier'){

        if(!empty($nom_client)  && !empty($prenom_client) && !empty($datenaiss) && !empty($cni) && !empty($adresse_client) && !empty($tel_client)){
           
            $ccpp = new ClientParticulier();
            $cp = new ClientP_model();
            
            $ccpp->setNom($nom_client);
            $ccpp->setPrenom($prenom_client);
            $ccpp->setDate_de_naissance($datenaiss);
            $ccpp->setCni($cni);
            $ccpp->setAdresse($adresse_client);
            $ccpp->setTéléphone($tel_client);
            $ccpp->setEmail($email_client);
            $ccpp->setProfession($profession);
            $ccpp->setStatut($statut);
            $ccpp->setSalaire($salaire);

            $resultat = $cp-> ajouterClientParticulier($ccpp);

            if($resultat==1){
                //if(!empty($type_compte)){
                    $liaison = $cni;

                    $cc = new Compte();
                    $c = new Compte_model();

                    $cc->setType_compte($type_compte);
                    $cc->setAgence($numero_agence);
                    $cc->setNumero_compte($numero_compte);
                    $cc->setCle_rib($cle_rib);
                    $cc->setFrais_ouverture($frais_ouverture);
                    $cc->set_cni($liaison);

                    $resultatc = $c->ajouterCompte($cc);
                
               // }

                if($_POST['check3']=='salarie'){
                    if(!empty($denomination)  && !empty($adresse_employeur)){ 
                        $statut = 1;
                        
                        $ee = new Employeur();
                        $e = new Employeur_model();

                        $ee->setNumero_identification($numero_identification);
                        $ee->setDenomination($denomination);
                        $ee->setRaison_social($raison_social);
                        $ee->setAdresse($adresse_employeur);

                        $resultatee = $e->ajouterEmployeur($ee);
                    }  

                }else if($_POST['check3']=='autres'){
                    $statut = 0;

                }

            }header("location:../view/index.php?ok=$resultat");  
        }header("location:../view/index.php?ok=$resultat");

    }else if($_POST['check1']=='Entreprise'){
        
        if(!empty($statut_juridique)  && !empty($nom_entreprise) && !empty($adresse_entreprise) && !empty($tel_entreprise)&& !empty($ninea)){
 
            $ccee = new ClientEntreprise();
            $ce = new ClientE_model();

            $ccee->setStatut($statut_juridique);
            $ccee->setDenomination($nom_entreprise);
            $ccee->setNinea($ninea);
            $ccee->setAdresse($adresse_entreprise);
            $ccee->setTelephone($tel_entreprise);
            $ccee->setMail($email_entreprise);
            
            $resultat = $ce->ajouterClientEntreprise($ccee);
        }    

        if($resultat==1){
           // if(!empty($type_compte)){
                $liaison = $ninea;

                $cc = new Compte();
                $c = new Compte_model();

                $cc->setType_compte($type_compte);
                $cc->setAgence($numero_agence);
                $cc->setNumero_compte($numero_compte);
                $cc->setCle_rib($cle_rib);
                $cc->setFrais_ouverture($frais_ouverture);
                $cc->set_ninea($liaison);

                $resultatc = $c->ajouterCompte($cc);
           // }
        }header("location:../view/index.php?ok=$resultat");
    }header("location:../view/index.php?ok=$resultat"); 

}
?>