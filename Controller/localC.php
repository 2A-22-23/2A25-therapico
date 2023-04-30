<?php
include '../config.php';
include '../Model/local.php';

class localC
{
    public function listlocaux()
    {
        $sql = "SELECT * FROM local";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletelocal($id)
    {
        $sql = "DELETE FROM local WHERE id_local = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addlocal($local)
    {
        $sql = "INSERT INTO local  
        VALUES (NULL, :ad,:ds, :cp)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'ad' => $local->getadresse_local(),
                'ds' => $local->getdescription_local(),
                'cp' => $local->getcapacite_local(),
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatelocal($local, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE local SET 
                    adresse_local = :adresse_local, 
                    description_local = :description_local, 
                    capacite_local = :capacite_local 
                WHERE id_local= :id_local'
            );
            $query->execute([
                'id_local' => $id,
                'adresse_local' => $local->getadresse_local(),
                'description_local' => $local->getdescription_local(),
                'capacite_local' => $local->getcapacite_local(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    

    function showlocal($id)
    {
        $sql = "SELECT * from local where id_local = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $local = $query->fetch();
            return $local;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
