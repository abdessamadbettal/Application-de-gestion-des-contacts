<?php
session_start();
?>
<?php
include 'model.php';
$user = new Users() ;
$signup = $user->signup() ;
$login = $user->login() ;
// if (empty($_SESSION['username'])) {

//   header('location: index.php');
// } else {
?>
<?php 
$title = "profile";
$navbar = true ;
include 'header.php';
?>
        <div class="p-4">
            <div class="container p-3"  id="intro">
                <p class="fs-1">welcome , <?php /* $_SESSION['USERNAME']; */ ?> !</p>
                <!-- <p><a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up</span></a> to start creating your contact list . </p> -->
                <!-- <p> Alredy have an account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login here</span></a> . </p> -->
                <p class="fs-4">your profile </p>
                <p class="fs-5">username : alex</p>
                <p class="fs-5">Signup date : 55/66/99</p>
                <p class="fs-5">last login : 55/66/99</p>
            </div>






        </div>

        
  


        <?php
         include 'footer.php';
//  }; ?>
        