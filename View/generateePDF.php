<?php
include '../Controller/localC.php';
$localC = new localC();
$localC->generateePDF($_GET["id_local"]);
header('Location:locaux.php');