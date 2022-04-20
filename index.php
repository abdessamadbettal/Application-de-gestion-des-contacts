<?php
$title = "index";
$navbar = false;
include 'header.php';
include 'model.php';
$user = new Users();
// $signup = $user->signup() ;
$login = $user->login() ;

if (isset($_POST['register'])) {
  $username = $_POST['username'];
   $password1 = $_POST['password1'];
   $password2 = $_POST['password2'];
   $usernameExist = $user->isUserExist($username);
   if (!$usernameExist) {
    $_SESSION['engistrer'] = "votre compte est cree avec succes" ;
         $register = $user->UserRegister($username, $password1);
  }else {
    $_SESSION['usenameExist'] = "les information ne peut pas engistré car username est deja existé" ;
       
     }
    }

?>
<div class="p-4">
<?php if(isset($_SESSION['engistrer'])) : ?>
      <div class="alert alert-success container"> <?= $_SESSION['engistrer'] ?></div>
      <?php session_unset(); ?>
<?php elseif(isset($_SESSION['usenameExist'])) : ?>
      <div class="alert alert-danger container"> <?= $_SESSION['usenameExist'] ?></div>
      <?php session_unset(); ?>
      <?php endif ; ?>
  <div class="container p-3" id="intro">
    <p class="fs-1">Hello !</p>
    <p class="fs-1">
      
    </p>
    <p><a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up</span></a> to start creating your contact list . </p>
    <p> Alredy have an account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login here</span></a> . </p>
  </div>
</div>
<?php
require 'modal_signup.php'; ?>
<!-- Modal Login -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Authenticate</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">username</label>
            <input type="text" name="username" class="form-control" id="email" aria-describedby="emailHelp">

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password1">
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
            <label class="form-check-label" for="exampleCheck1">souvenir de moi</label>
          </div>
          <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="p-2">
          <p> No account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up </span></a>here . </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
// include "signup_validation.php" ;
include 'footer.php' ?>