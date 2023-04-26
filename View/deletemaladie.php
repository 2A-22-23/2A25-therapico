<?php
include '../Controller/maladieC.php';
$maladieC = new maladieC();
$maladieC->deletemaladie($_GET["id_maladie"]);
header('Location:Listmaladie.php');
