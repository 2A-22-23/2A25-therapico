<?php
include '../config.php';
include '../Model/paiment.php';

class paimentC
{
    public function ListpaimentC()
    {
        $sql = "SELECT * FROM paiement";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function add_paiment($paiment)
    {  

        $sql = "INSERT INTO paiement  
        VALUES (:cin_p, :nom_prenom_p, :email_p, :adr, :city)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'cin_p' => $paiment->getcin_p(),
                'nom_prenom_p' => $paiment->getnom_prenom_p(),
                'email_p'=> $paiment->getemail_p(),
                'adr' => $paiment->getadr(),
                'city' => $paiment->getcity()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }/*
    function add_paiment($paiment, $card_info)
    {  
        $sql_paiement = "INSERT INTO paiement  
            VALUES (:cin_p, :nom_prenom_p, :email_p, :adr, :city)";
        $sql_card_info = "INSERT INTO card_info
            VALUES (NULL, :cname, :ccnum, :expmonth, :expyear, :cvv)";
        
        $db = config::getConnexion();
        try {
            $db->beginTransaction();
    
            // Ajouter le paiement dans la table paiement
            $query_paiement = $db->prepare($sql_paiement);
            $query_paiement->execute([
                'cin_p' => $paiment->getcin_p(),
                'nom_prenom_p' => $paiment->getnom_prenom_p(),
                'email_p'=> $paiment->getemail_p(),
                'adr' => $paiment->getadr(),
                'city' => $paiment->getcity()
            ]);
    
            // Récupérer l'ID de paiement inséré
    
            // Ajouter les informations de carte dans la table card_info
            $query_card_info = $db->prepare($sql_card_info);
            $query_card_info->execute([
                'cname' => $card_info->getcname(),
                'ccnum' => $card_info->getccnum(),
                'expmonth' => $card_info->getexpmonth(),
                'expyear' => $card_info->getexpyear(),
                'cvv' => $card_info->getcvv()
            ]);
    
            $db->commit();
        } catch (Exception $e) {
            $db->rollBack();
            echo 'Error: ' . $e->getMessage();
        }
    }
    

  /*  function add_paiment($paiment,$card_info)
{  

    $sql = "INSERT INTO paiement  
    VALUES (:cin_p, :nom_prenom_p, :email_p, :adr, :city);
  INSERT INTO card_info
    VALUES (NULL, :cname, :ccnum, :expmonth, :expyear, :cvv)";
    
    $db = config::getConnexion();
    try {

        // Ajouter le paiement dans la table paiement
        $query = $db->prepare($sql);
        $query->execute([
            'cin_p' => $paiment->getcin_p(),
            'nom_prenom_p' => $paiment->getnom_prenom_p(),
            'email_p'=> $paiment->getemail_p(),
            'adr' => $paiment->getadr(),
            'city' => $paiment->getcity(),
            'cname' => $card_info->getcname(),
            'ccnum' => $card_info->getccnum(),
            'expmonth' => $card_info->getexpmonth(),
            'expyear' => $card_info->getexpyear(),
            'cvv' => $card_info->getcvv()
        ]);


    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

          // Ajouter les informations de carte de crédit dans la table card_info
      /*  $query_card_info = $db->prepare($sql_card_info);
        $query_card_info->execute([
            'cname' => $card_info->getcname(),
            'ccnum' => $card_info->getccnum(),
            'expmonth' => $card_info->getexpmonth(),
            'expyear' => $card_info->getexpyear(),
            'cvv' => $card_info->getcvv()
          
        ]);
*/
    function deletepaiment($cin_p)
    {
        $sql = "DELETE FROM paiement WHERE cin_p = :cin_p";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':cin_p', $cin_p);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function updatepaiement($paiment, $cin_p)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE paiement SET 
                    nom_prenom_p = :nom_prenom_p, 
                    email_p = :email_p, 
                    adr = :adr, 
                    city = :city
                WHERE cin_p= :cin_p'
            );
            $query->execute([
                'cin_p' => $paiment->getcin_p(),
                'nom_prenom_p' => $paiment->getnom_prenom_p(),
                'email_p'=> $paiment->getemail_p(),
                'adr' => $paiment->getadr(),
                'city' => $paiment->getcity()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showpaiement($cin_p)
    {
        $sql = "SELECT * from paiement where cin_p = $cin_p";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $paiment = $query->fetch();
            return $paiment;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
}