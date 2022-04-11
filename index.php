<?php 
$title = "index";
$navbar = false ;
include 'header.php';
?>
        <div class="p-4">
            <div class="container p-3"  id="intro">
                <p class="fs-1">Hello !</p>
                <p><a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up</span></a> to start creating your contact list . </p>
                <p> Alredy have an account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login here</span></a> . </p>
            
            
            </div>



        </div>

        
  
  <!-- Modal sign up -->
  <div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          

            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">username</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password verify</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                <div class="mb-3 form-check">
                  <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                  <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign up</button>
              </form>
              <div class="p-2"> <p> Alredy have an account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login here</span></a> . </p></div>

              
        </div>
        
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Login -->
  <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Authenticate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          

            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">username</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password1">
                </div>
                
                <div class="mb-3 form-check">
                  <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
              </form>
              <div class="p-2"> <p> No account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up </span></a>here . </p></div>

              
        </div>
        
        </div>
      </div>
    </div>
  </div>
    </main>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    </footer>
    
</body>
</html>