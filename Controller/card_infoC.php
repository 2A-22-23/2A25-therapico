<?php
include '../cong.php';
include '../Model/card_info.php';

class card_infoC
{
function add_paiment1($card_info)
   {  

        $sql = "INSERT INTO card_info  
        VALUES (NULL, :cname, :ccnum, :expmonth, :expyear , :cvv)";
        $db = cong::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
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
}