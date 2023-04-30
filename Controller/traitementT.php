<?php
include '../cong.php';
include '../Model/traitement.php';

class traitementT
{
   
   
    function add_traitement($traitement)
       {  
    
            $sql = "INSERT INTO traitement 
            VALUES (NULL, :cin_p, :duree_T, :type_T)";
            $db = cong::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                'cin_p' => $traitement->getcin_p(),
                'type_T' => $traitement->gettype_T(),
                'duree_T' => $traitement->getduree_T(),
                
                ]);
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    
       function delete_traitement($id_T)
        {
            $sql = "DELETE FROM traitement WHERE id_T = :id_T"; // :en base de données
            $db = cong::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id_T', $id_T);
    
            try {
                $req->execute();
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
        public function list_traitement()
        {
            $sql = "SELECT * FROM traitement";
            $db = cong::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
        
    
        function update_traitement($traitement, $id_T)
        {
            try {
                $db = cong::getConnexion();
                $query = $db->prepare(
                    'UPDATE traitement SET 
                        type_T = :type_T, 
                        duree_T = :duree_T
                        
                    WHERE id_T= :id_T'
                );
                $query->execute([
                    'id_T'=>$id_T,
                    'type_T' => $traitement->gettype_T(),
                    'duree_T' => $traitement->getduree_T()
                    
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    
        function show_traitement($id_T)
        {
            $sql = "SELECT * from traitement where id_T = $id_T";
            $db = cong::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();
    
                $traitement = $query->fetch();
                return $traitement;
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage());
            }
        }
}
