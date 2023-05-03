<?php
include '../config.php';
include '../Model/patient.php';

class patientP
{
    public function listPatients()
    {
        $sql = "SELECT * FROM patient";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletePatient($cin_p)
    {
        $sql = "DELETE FROM patient WHERE cin_p = :cin_p"; // :en base de données
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':cin_p', $cin_p);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addPatient($patient)
    {
        $sql = "INSERT INTO patient  
        VALUES (:cin_p, :nom_prenom_p, :date_n_p, :tel_p , :email_p , :sexe_p , :pass_p)";
        $db = config::getConnexion();
        try {
            print_r($patient->getdate_n_p()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'cin_p' => $patient->get_cin_p(),
                'nom_prenom_p' => $patient->getnom_prenom_p(),
                'date_n_p' => $patient->getdate_n_p()->format('Y/m/d'), //('Y/m/d')
                'tel_p' => $patient->gettel_p(),
                'email_p' => $patient->getemail_p(),
                'sexe_p' => $patient->getsexe_p(),
                'pass_p' => $patient->getpass_p()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatePatient($patient, $cin_p)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE patient SET 
                    nom_prenom_p = :nom_prenom_p, 
                    date_n_p = :date_n_p, 
                    tel_p = :tel_p, 
                     email_p= :email_p,
                     sexe_p=:sexe_p,
                     pass_p=:pass_p
                WHERE cin_p= :cin_p'
            );
            $query->execute([
               'cin_p' => $cin_p,
                'nom_prenom_p' => $patient->getnom_prenom_p(),
                'date_n_p' => $patient->getdate_n_p()->format('Y/m/d'),
                'tel_p' => $patient->gettel_p(),
                'email_p' => $patient->getemail_p(),
                'sexe_p' => $patient->getsexe_p(),
                'pass_p' => $patient->getpass_p()
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showPatient($cin_p)
    {
        $sql = "SELECT * from patient where cin_p = $cin_p";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $patient = $query->fetch();
            return $patient;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
