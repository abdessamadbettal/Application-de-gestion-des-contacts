
<!-- Modal sign up -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form method="POST" id="inscription">
            <!-- <div class="alert"></div> -->
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">username</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" >
            <div class="alert d-none"></div>

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password1" id="password1" >
            <div class="alert d-none"></div>
        </div>
          <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Password verify</label>
            <input type="password" class="form-control" name="password2" id="password2" >
            <div class="alert d-none "></div>  
        </div>
          <div class="mb-3 form-check">
            <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
            <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
          </div>
          <button type="submit" name="signup" class="btn btn-primary w-100">Sign up</button>
        </form>
        <div class="p-2">
          <p> Alredy have an account ? <a href="#"><span class="text-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login here</span></a> . </p>
        </div>


      </div>

    </div>
  </div>
</div>