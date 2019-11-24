<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <title>Document</title>

</head>
<body>
<div class="jumbotron">
    <h1>Liste des étudiants</h1>
</div>

<br>

<table class="table table-striped">
 <tr>
    <td>Id</td>
    <td>Firstname</td>
    <td>Lastname</td>
    <td>Email</td>
    <td>Phone</td>
   
   </tr>
   <?php 
   include 'etudiant.php';
    $stud= new etudiant;
    $listet = $stud->readallstudents();


    while ($donnees = $listet->fetch()) 
        {
            echo '<tr>';
            echo '<td>'.$donnees['id'].'</td>';
            echo '<td>'.$donnees['firstname'].'</td>';
            echo '<td>'.$donnees['lastname'].'</td>';
            echo '<td>'.$donnees['email'].'</td>';
            echo '<td>'.$donnees['phone'].'</td>';
            $id_pass=$donnees['id'];
             echo '<td><a href="edit.php?id='.$donnees['id'].'"><i class="fas fa-plus">Editer</i></a>        ';  
           echo '<a href="delete.php?id='.$donnees['id'].'"><i class="fas fa-minus">Supprimer</i></a></td>';  
              
             
            echo '</tr>';
        }



  ?>
</table>
<a  class="btn btn-primary"href="create.php">ajouter</a>
</body>
</html>