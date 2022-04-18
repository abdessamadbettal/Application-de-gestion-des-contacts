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
            <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
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