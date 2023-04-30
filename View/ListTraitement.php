<?php
include '../Controller/patientP.php';

$patientP = new patientP();
$list = $patientP->listPatients();

if(isset($_POST['search'])) {
  $search_query = $_POST['search_query'];
  $list = $patientP->searchPatientsById($search_query);
}

// Fonction de tri alphabétique
function sortList($list, $order) {
  $nameList = array();
  foreach ($list as $patient) {
    $nameList[] = $patient['nom_prenom_p'];
  }
  if ($order == 'asc') {
    array_multisort($nameList, SORT_ASC, $list);
  } else if ($order == 'desc') {
    array_multisort($nameList, SORT_DESC, $list);
  }
  return $list;
}

if (isset($_GET['sort'])) {
  $order = $_GET['sort'];
  $list = sortList($list, $order);
}


?>

<html>
<head>
  <meta name="color-scheme" content="Light">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <style>
  table, th, td {  
    border: 1px solid black;  
    border-collapse: collapse;  
}  
th, td {  
    padding: 10px;  
}  
table#alter tr:nth-child(even) {  
    background-color: #eee;  
}  
table#alter tr:nth-child(odd) {  
    background-color: #fff;  
}  
table#alter th {  
    color: white;  
    background-color: rgb(6, 154, 217);  
}  

a:link, a:visited {
  background-color: rgb(6, 154, 217);
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: rgb(6 93 217);
}



            </style> 
  <div>
    <div>
      <div>
        <div>
          <img src="images/fav-icon/mylogo.png" height="80" width="80" >  
          <center>
            <title>List Patients</title>
            <h1>List of Patients</h1>
            <br>
          </center>
          <center>
            <form method="POST">
              <input type="text" placeholder="Enter ID Card" name="search_query">
              <button type="submit" name="search"><i class="fa fa-search"></i></button>
            </form>
            <br>
            <table id="alter">
              <tr>
                <th> ID Card </th>
                <th> Fullname </th>
                <th> Date Of Birth </th>
                <th> Phone Number </th>
                <th> Email Address </th>
                <th> Gender </th>
                <th> ADD TREATMENT</th>
                <th> CHECK TREATMENT </th>
              </tr>
              <?php
              foreach ($list as $patient) {
                ?>
                <tr>
                  <td><span class="ps-2"> <?= $patient['cin_p']; ?> </span></td>
                  <td><?= $patient['nom_prenom_p']; ?></td>
                  <td><?= $patient['date_n_p']; ?></td>
                  <td><?= $patient['tel_p']; ?></td>
                  <td><?= $patient['email_p']; ?></td>
                  <td><?= $patient['sexe_p']; ?></td>
                  <td>
                    <a href="add_traitement.php?cin_p=<?php echo $patient['cin_p']; ?>" style="text-decoration:none" target="_blank">ADD TREATMENT</a>
                  </td>
                  <td>
                    <a href="check_traitement.php?cin_p=<?php echo $patient['cin_p']; ?>" style="text-decoration:none" target="_blank">CHECK TREATMENT</a>
                  </td>
                </tr>
              <?php } ?>
            </table>
          </center>
          <center>
            <br>
            <a href="indexB.html" style="text-decoration:none" target="_blank">Go Back</a>
          </center>
        </div>
              </body>
              </html>