<?php
include '../Controller/docteurC.php';
$docteurC = new docteurC();
$docteurC->deletedocteur($_GET["cin_d"]);
header('Location: Listdocteurs.php');

