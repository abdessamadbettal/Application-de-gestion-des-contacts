<?php
include 'model.php';
$model = new Contact() ;

$modifier = $model->modifier() ; 
$supermer = $model->suprimer() ;
$ajouter = $model->ajouter();
$rows = $model->aficher();

