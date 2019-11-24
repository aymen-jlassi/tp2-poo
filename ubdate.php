<?php
include 'etudiant.php';
$etud = new etudiant;




   $i = $_POST['id'];
    $fi = $_POST['firstname'];
    $la = $_POST['lastname'];
    $em = $_POST['email'];
    $ph = $_POST['phone'];
   

    $etud-> modifetudiant( $i, $fi, $la, $em, $ph);
    header('Location:index.php');
  






?>