<?php
include '../Controller/localC.php';
$localC = new localC();
$localC->deletelocal($_GET["id_local"]);
header('Location:Listlocaux.php');
