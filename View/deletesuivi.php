<?php
include '../Controller/suiviC.php';
$suiviC = new suiviC();
$suiviC->deletesuivi($_GET["cin_s"]);
header('Location: Listesuivis.php');

