<?php 
include '../Controller/suiviC.php'; 
$suiviC = new suiviC(); 
$list = $suiviC->listesuivis(); 
?> 
<head>
<meta charset="utf-8" />
<meta name="color-scheme" content="Light">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/cssback.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="table2excel.js"></script>

</head> 
<body> 
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <img src="images/fav-icon/mylogo.png" height="80" width="80" >  
  <center> 
    <h1>Liste des suivis</h1> 
    <h2> <a href="addsuivi.php">Ajouter un suivi</a> </h2> 
  </center> 
  <div class="table-responsive">
  <table border="1" align="center" width="70%" class="table"> 
    <thead>
    <tr> 
    <th>CIN du suivi</th> 
      <th>CIN du patient</th> 
      <th>CIN du médecin</th> 
      <th>Date de consultation</th> 
      <th>Symptômes</th> 
      <th>Diagnostic</th> 
      <th>Modifier</th> 
      <th>Supprimer</th> 
      <th>ajouter suivi</th> 
    </tr> 
    </thead>
</tbody>
    <?php foreach ($list as $suivi) { ?> 
      <tr> 
        <td><?= $suivi['cin_s']; ?></td> 
        <td><?= $suivi['cin_p']; ?></td>
        <td><?= $suivi['cin_d']; ?></td> 
        <td><?= $suivi['date_consultation']; ?></td> 
        <td><?= $suivi['symptomes']; ?></td> 
        <td><?= $suivi['diagnostic']; ?></td> 
        <td align="center"> 
          <form method="POST" action="updatesuivi.php"> 
            <input type="submit" name="update" value="Modifier"> 
            <input type="hidden" value=<?PHP echo $suivi['cin_s']; ?> name="cin_s"> 
          </form> 
        </td> 
        <td> 
          <a href="deletesuivi.php?cin_s=<?php echo $suivi['cin_s']; ?>">Supprimer</a> 
        </td>
        <td>

                <form method="POST" action="addsuivi.php"> 
            <input type="submit" name="add" value="add"> 
            <input type="hidden" value=<?PHP echo $suivi['cin_d']; ?> name="cin_d"> 
          </form>   </td>
      </tr> 
      
    <?php } ?> 
  </table> 
 <center> <input type="submit" id="export" value="Export to Excel"></center>

    <script>
      var table2excel = new Table2Excel();

      document.getElementById('export').addEventListener('click', function() {
        table2excel.export(document.querySelectorAll('table'));
      });
    </script>
</body> 
</html>