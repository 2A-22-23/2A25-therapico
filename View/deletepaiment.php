<?php
include '../Controller/paimentC.php';
$paimentC = new paimentC();
$paimentC->deletepaiment($_GET["cin_p"]);
header('Location:ListpaimentC.php');
