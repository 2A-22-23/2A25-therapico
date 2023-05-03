<?php
include '../Controller/localC.php';
$localC = new localC();
$list = $localC->listlocaux();
?>
<html>

<head>
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
</head>

<body>
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <img src="images/fav-icon/mylogo.png" height="80" width="80" >  
                    <center>
                        <title>List local</title>
                        <a href="addLocal.php">Ajouter un local</a>
                           <br>
                        <br>
                        <br>
                         <h1>List of local </h1>
                         <br>
                         </center>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                           
                  
                          <th>Id local</th>
            <th>Adresse</th>
            <th>Description</th>
            <th>Capacité</th>
            <th>        </th>
            <th>Modifier</th>
            <th>Supprimer</th>
                          </tr>
                        </thead>
                        <tbody>
                                

        <?php
        foreach ($list as $local) {
        ?>
            <tr>
            <td><?= $local['id_local']; ?></td>
                <td><?= $local['adresse_local']; ?></td>
                <td><?= $local['description_local']; ?></td>
                <td><?= $local['capacite_local']; ?></td>
                <td align="center">
                       
                <td >

                   
                <form method="POST" action="updatelocal.php">
                    <input type="submit" name="update" value="Update">
   <input type="hidden" value=<?PHP echo $local['id_local']; ?> name="id_local">
</form>
</td>
<td > 
<a href="deletelocal.php?id_local=<?php echo $local['id_local']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

   
</body>

 

</html>