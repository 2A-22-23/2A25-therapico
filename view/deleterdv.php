<?php
include '../Controller/rendez.php';
$rendez = new rendez();
$rendez->deleterdv($_GET["ID_rdv"]);
header('Location:listrdv.php');
