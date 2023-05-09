<?php
include '../config.php';
include '../model/rique.php';

class histo
{
    public function listhisto()
    {
        $sql = "SELECT * FROM historique";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addhitso($rique)
    {
        $sql = "INSERT INTO historique (ID_rdv,rdv_annulee,rdv_passee,rdv_future,rdv_courant)
        VALUES (NULL,:rdv_annulee, :rdv_passee, :rdv_future, :rdv_courant)";
        $db = config::getConnexion();
        try {
            print_r($rique->getrdv_annulee()->format('Y-m-d'));
            print_r($rique->getrdv_passee()->format('Y-m-d'));
            print_r($rique->getrdv_future()->format('Y-m-d'));
            print_r($rique->getrdv_courant()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
               // 'ID_rdv' => $rique->getID_rdv(),
                'rdv_annulee' => $rique->getrdv_annulee()->format('Y-m-d'),
                'rdv_passee' => $rique->getrdv_passee()->format('Y-m-d'),
                'rdv_future' => $rique->getrdv_future()->format('Y-m-d'),
                'rdv_courant' => $rique->getrdv_courant()->format('Y-m-d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function deletehisto($ID_rdv)
    {
        $sql = "DELETE FROM historique WHERE ID_rdv = :ID_rdv";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':ID_rdv', $ID_rdv);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function updatehisto($rique, $ID_rdv)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE historique SET 
                    rdv_annulee = :rdv_annulee, 
                    rdv_passee = :rdv_passee, 
                    rdv_future = :rdv_future, 
                     rdv_courant = :rdv_courant,
                     stats=null                 
                WHERE ID_rdv= :ID_rdv'
            );
            $query->execute([
                'ID_rdv' => $ID_rdv,
                'rdv_annulee' => $rique->getrdv_annulee()->format('Y/m/d'),
                'rdv_passee' => $rique->getrdv_passee()->format('Y/m/d'),
                'rdv_future' => $rique->getrdv_future()->format('Y/m/d'),
                'rdv_courant' => $rique->getrdv_courant()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " history updated succefully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    

    function showhisto($ID_rdv)
    {
        $sql = "SELECT * from historique where ID_rdv = $ID_rdv";
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
