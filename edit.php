<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
include 'etudiant.php';

$etud=new etudiant;

$re=$etud->getbyid($_GET['id']);
$din=$re->fetch();
?>

<form class="container" method="POST" action="ubdate.php">
    <h1 class="alert-black">Editer Etudiant</h1>
  <div class="row">
    <div class="col">
    <br>
        first name
        <br>
      <input type="text" class="form-control" name="firstname" value="<?= $din['firstname'];?>">
    </div>
    <div class="col">
    <br>
        last name
        <br>
      <input type="text" class="form-control"  name="lastname" value="<?= $din['lastname'];?>">
    </div>
  </div>
  <br><br><br>
  <div class="row">
  <div class="col">
      email
      <br>
      <input type="text" class="form-control" name="email" value="<?= $din['email'];?>">
    </div>
    <div class="col">
        phone
        <br>
      <input type="number" class="form-control"  name="phone" value="<?= $din['phone'];?>">
      <input type="hidden" name="id" value="<?= $din['id']?>">
    </div>
    
  </div>
  <br><br>

  <button class="btn btn-primary">Enregistre</button>
  <button class="btn btn-secondary" href="index.php">annuler</button>
</form>





</body>
</html>