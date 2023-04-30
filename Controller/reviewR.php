<?php
include '../config.php';
include '../Model/review.php';
class reviewR
{
    public function Listreview()
    {
        $sql = "SELECT * FROM review";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
   
    function addreview($review)
    {
        $sql = "INSERT INTO review 
        VALUES (NULL,:cin_p,:fullname,:email,:review)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'cin_p' => $review->getcin_p(),
                'fullname' => $review->getfullname(),
                'email' => $review->getemail(),
                'review' => $review->getreview(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }







}