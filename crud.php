<?php
include 'model.php';
$model = new Contact() ;

// $signup = $model->signup() ;
$modifier = $model->modifier() ; 
$supermer = $model->suprimer() ;
$ajouter = $model->ajouter();
$rows = $model->aficher($_SESSION['ID_USER']);
$login =  $model->login();
$signup = $model->signup() ;

