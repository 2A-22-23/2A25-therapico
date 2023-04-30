<?php
include '../conv.php';
include '../Model/maladie.php';

class maladieC
{

    function add_maladie($maladie)
   {  

        $sql = "INSERT INTO maladie  
        VALUES (NULL, :n, :p, :a )";
        $db = conv::getConnexion3();
        try {
            $query = $db->prepare($sql);
            $query->execute([
            //'id' => $maladie->getId_maladie(),
            'n' => $maladie->getmaladie_fk(),
            'p' => $maladie->gettype_maladie(),
            'a' => $maladie->getnbre_locaux_possibles(),
            
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function deletemaladie($id)
    {
        $sql = "DELETE FROM maladie WHERE id_maladie = :id";
        $db = conv::getConnexion3();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function listmaladie()
    {
        $sql = "SELECT * FROM maladie";
        $db = conv::getConnexion3();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

/* function updatemaladie($maladie, $id)
    {
        try {
            $db = config::getConnexion3();
            $query = $db->prepare(
                'UPDATE maladie SET 
                    maladie_fk = :maladie_fk, 
                    type_maladie = :type_maladie, 
                    nbre_locaux_possibles = :nbre_locaux_possibles 
                WHERE id_maladie= :id_maladie'
            );
            $query->execute([
                'id_maladie' => $id,
                'maladie_fk' => $maladie->getmaladie_fk(),
                'type_maladie' => $maladie->gettype_maladie(),
                'nbre_locaux_possibles' => $maladie->getnbre_locaux_possibles(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }*/
    function updatemaladie($maladie, $id)
    {
        try {
            $db = conv::getConnexion3();
            $query = $db->prepare(
               ' UPDATE maladie SET 
                    id_local = :id_local, 
                    type_maladie = :type_maladie, 
                    nbre_locaux_possibles = :nbre_locaux_possibles 
                WHERE id_maladie= :id_maladie'
            );
            $query->execute([
                'id_maladie' => $id,
                'id_local' => $maladie->getid_local(),
                'type_maladie' => $maladie->gettype_maladie(),
                'nbre_locaux_possibles' => $maladie->getnbre_locaux_possibles(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showmaladie($id)
    {
        $sql = "SELECT * from maladie where id_maladie = $id";
        $db = conv::getConnexion3();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $local = $query->fetch();
            return $local;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

    function addmaladie1($maladie,$id) {
        $db = conv::getConnexion3();
      
       
        // Insert the new row into the suivi table
        $sql = "INSERT INTO maladie  
        VALUES (NULL, :n, :p, :a )";
        try {
            $query = $db->prepare($sql);
            $query->execute([
               
                'n' => $maladie->getid_local(),
                'p' => $maladie->gettype_maladie(),
                'a' => $maladie->getnbre_locaux_possibles(),
            ]);
            return true;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
}

