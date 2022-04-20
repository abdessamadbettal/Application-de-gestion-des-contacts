<?php
// session_start();

?>
<?php
include 'crud.php';
if (empty($_SESSION['USERNAME'])) {

  header('location: index.php');
} else {
?>
<?php 
$title = "profile";
$navbar = true ;
include 'header.php';
?>
        <div class="p-4">
            <div class="container p-3"  id="intro">
                <p class="fs-1">welcome , <?= $_SESSION['USERNAME'];  ?> !</p>
                <!-- <p><a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up</span></a> to start creating your contact list . </p> -->
                <!-- <p> Alredy have an account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login here</span></a> . </p> -->
                <p class="fs-4">your profile </p>
                <p class="fs-5">username : <?= $_SESSION['USERNAME'];  ?></p>
                <p class="fs-5">Signup date : <?= $_SESSION['DATE_REGISTER'];  ?></p>
                <p class="fs-5">last login : <?=  $_SESSION['LAST_LOGIN'];  ?></p>
            </div>






        </div>

        
  


        <?php
         include 'footer.php';
 }; ?>
        