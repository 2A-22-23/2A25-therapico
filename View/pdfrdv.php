<?php
include_once('../tcpdf/tcpdf.php');
include_once 'C:/xampp/htdocs/therapico/Controller/rendez.php';
//include_once 'C:/xampp/htdocs/therapcio/Model/vous.php';
$rendez = new rendez();
$list=$rendez->listrdv();

$html = '<table class="table table-bordered">
    <tr>
        <th>ID_rdv</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>age</th>
        <th>Sexe</th>
        <th>Profession</th>
        <th>Date_RDV</th>
        <th>telephone</th>
        <th>Email</th>




    </tr>';
foreach ($list as $vous) {
    $html .= '<tr>
            <td>'. $vous['ID_rdv'] .'</td>
            <td>'. $vous['Nom'] .'</td>
            <td>'. $vous['Prenom'] .'</td>
            <td>'. $vous['age'] .'</td>
            <td>'. $vous['Sexe'] .'</td>
            <td>'. $vous['Profession'] .'</td>
            <td>'. $vous['Date_RDV'] .'</td>
            <td>'. $vous['telephone'] .'</td>
            <td>'. $vous['email_r'] .'</td>
            

        </tr>';
}
$html .= '</table>';

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('list.pdf', 'D');
?>