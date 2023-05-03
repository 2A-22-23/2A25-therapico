<?php
include '../Controller/PatientP.php';
$patientP= new patientP();
$patientP->deletePatient($_GET["cin_p"]);
header('Location:ListPatient.php');
