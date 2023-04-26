<?php
include '../controller/histoC.php';
$histo = new histo();
$histo->deletehisto($_GET["ID_rdv"]);
header('Location:Listhisto.php');
