<?php
include '../config.php';
include '../Model/docteur.php';

class docteurC
{
    public function listdocteurs()
    {
        $sql = "SELECT * FROM docteur";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletedocteur($cin_d)
    {
        $sql = "DELETE FROM docteur WHERE cin_d = :cin_d";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':cin_d', $cin_d);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function adddocteur($docteur)
    { // firstName_d , lastName_d ,  email_d , passwd_d , confirmPassword_d
        $sql = "INSERT INTO docteur
        VALUES (:cin_d, :firstName_d, :lastName_d, :email_d, :passwd_d, :confirmPassword_d)";
        $db = config::getConnexion();
        try {
        $query = $db->prepare($sql);
        $query->execute([
        'cin_d' => $docteur->getCin_d(),
        'firstName_d' => $docteur->getFirstName_d(),
        'lastName_d' => $docteur->getLastName_d(),
        'email_d' => $docteur->getemail_d(),
        'passwd_d' => $docteur->getpasswd_d(),
        'confirmPassword_d' => $docteur->getConfirmPassword_d(),
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatedocteur($docteur, $cin_d)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE docteur SET 
                    firstName_d = :firstName_d, 
                    lastName_d = :lastName_d, 
                    email_d = :email_d,
                    passwd_d = :passwd_d,
                    confirmPassword_d = :confirmPassword_d
                WHERE cin_d = :cin_d'
            );
            $query->execute([
                'cin_d' => $cin_d,
                'firstName_d' => $docteur->getFirstName_d(),
                'lastName_d' => $docteur->getLastName_d(),
                'email_d' => $docteur->getemail_d(),
                'passwd_d' => $docteur->getpasswd_d(),
                'confirmPassword_d' => $docteur->getConfirmPassword_d(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    

    function showdocteur($cin_d)
    {
        $sql = "SELECT * from docteur where cin_d = :cin_d";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':cin_d', $cin_d);
            $query->execute();

            $docteur = $query->fetch();
            return $docteur;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
