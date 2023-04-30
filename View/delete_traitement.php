<?php
include '../Controller/traitementT.php';
$traitementT= new traitementT();
$traitementT->delete_traitement($_GET["id_T"]);
header('Location:check_traitement.php');
