<?php
include 'etudiant.php';
$st= new etudiant;
$st->delete($_GET['id']);
header('location:index.php');

?>