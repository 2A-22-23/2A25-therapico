<?php
include '../Controller/traitementT.php';
$traitementT = new traitementT();
$list = $traitementT->list_traitement();
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

		<!-- responsive style sheet -->
		
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

:hover, a:active {
  background-color: rgb(6 93 217);
}

            </style>
<div >
              <div >
                <div>
                  <div >
                  <img src="images/fav-icon/mylogo.png" height="80" width="80" >  
                    <center>
                        <title>List Treatments</title>
                        
                         
                        
                         <h1>List of Treatments</h1>
                         <br>
     <!--   <h2>
            <a href="addPatient.php">Add Patient</a>
        </h2>-->
                    </center>
                    <center>
                      <table id="alter">
                      
                          <tr>
                           
                            <th> Treatment ID</th>
                            <th> Patient ID </th>
                            <th> Treatment Type </th>
                            <th> Treatment Duration </th>
                          
                            
                            <th> Delete </th>
                            <th> Update </th>
                         
                          </tr>
                        
                          
</center>    

<?php
        foreach ($list as $traitement) {
        ?>
            <tr>
                <td><span class="ps-2"> <?= $traitement['id_T']; ?> </span></td>
                <td><?= $traitement['cin_p']; ?></td>
                <td><?= $traitement['type_T']; ?></td>
                <td><?= $traitement['duree_T']; ?></td>
               >
                

                
                <td>

                <a href="delete_traitement.php?id_T=<?php echo $traitement['id_T']; ?>" style="text-decoration:none" target="_blank">Delete</a>
              
                </td>

                <td>

      <a href="update_traitement.php?id_T=<?php echo $traitement['id_T']; ?>" style="text-decoration:none" target="_blank">Update</a>
       
                </td>
     
        
                              
                
        
            </tr>
        <?php
        }
        ?>

<center> <a href="ListTraitement.php" style="text-decoration:none" target="_blank">Go Back</a></center>

    </body>
              </html>