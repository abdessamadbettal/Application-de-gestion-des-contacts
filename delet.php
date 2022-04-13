<?php
include 'model.php';
$model = new Contact() ;
// $id = $_REQUEST['delet'];
// $delet = $model ->delete($id) ;
// if ($delet) {
//     echo "<script>alert('deleted succefuly');</script>" ;
//     echo "<script>window.location.href='contact.php';</script>"; 
// }
// $id = $_GET['supermer'];
// $modifier = $model->modifier($id) ;
$supermer = $model->suprimer() ;

// if ($supermer) {
//     echo "<script>alert('deleted succefuly');</script>" ;
//     echo "<script>window.location.href='contact.php';</script>"; 
// }

?>