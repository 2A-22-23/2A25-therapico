<?php
include '../configh.php';
include '../Model/vous.php';

class rendez
{
    public function listrdv()
    {
        $sql = "SELECT * FROM rendezvous";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addrdv($vous)
    {
        $sql = "INSERT INTO rendezvous  
        VALUES (NULL, :Nom, :Prenom, :Sexe , :Profession , :Date_RDV, :Type_RDV, :telephone, :email_r, :age)";
        $db = config::getConnexion();
        try {
            print_r($vous->getDate_RDV()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                //'ID_rdv' => $vous->getID_rdv(),
                'Nom' => $vous->getNom(),
                'Prenom' => $vous->getPrenom(),
                'Sexe' => $vous->getSexe(),
                'Profession' => $vous->getProfession(),
                'Date_RDV' => $vous->getDate_RDV()->format('Y/m/d'),
                'Type_RDV' => $vous->getType_RDV(),
                'telephone' => $vous->gettelephone(),
                'email_r' => $vous->getemail_r(),
                'age' => $vous->getage()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function deleterdv($ID_rdv)
    {
        $sql = "DELETE FROM rendezvous WHERE ID_rdv = :ID_rdv";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':ID_rdv', $ID_rdv);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function updaterdv($vous, $ID_rdv)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE rendezvous SET 
                    Nom = :Nom, 
                    Prenom = :Prenom, 
                    Sexe = :Sexe, 
                     Profession = :Profession,
                     Date_RDV=:Date_RDV,
                     Type_RDV=:Type_RDV,
                     telephone = :telephone,
                     email_r = :email_r,
                     age = :age
                WHERE ID_rdv= :ID_rdv'
            );
            $query->execute([
               'ID_rdv' => $ID_rdv,
                'Nom' => $vous->getNom(),
                'Prenom' => $vous->getPrenom(),
                'Sexe' => $vous->getSexe(),
                'Profession' => $vous->getProfession(),
                'Date_RDV' => $vous->getDate_RDV()->format('Y/m/d'),
                'Type_RDV' => $vous->getType_RDV(),
                'telephone' => $vous->gettelephone(),
                'email_r' => $vous->getemail_r(),
                'age' => $vous->getage()
        
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    

    function showrdv($ID_rdv)
    {
        $sql = "SELECT * from rendezvous where ID_rdv = $ID_rdv";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $vous = $query->fetch();
            return $vous;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}

