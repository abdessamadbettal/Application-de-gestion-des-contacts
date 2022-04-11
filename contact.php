<?php 
$title = "profile";
$navbar = true ;
include 'header.php';
?>
        <div class="p-4">
            <div class="container p-3" id="intro">
                <?php include 'model.php';
                // $model =new Model();
                // $insert = $model->insert();
                ?>
                
                <p class="fs-1">Contact list</p>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addcontact">Add contact</button>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>adress</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Pitt@gmail</td>
                            <td>35</td>
                            <td>35</td>
                            <td>
                                <div class="d-flex flex-column">
                                    <div>Edit</div>
                                    <div>Delet</div>

                                </div>
                            </td>

                        </tr>
                    </tbody>
                  </table>
                
            </div>


            



        </div>



        <!-- Modal add contact -->
        <div class="modal fade" id="addcontact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form>
                            <div class="d-flex ">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">phone</label>
                                <input type="text" class="form-control" id="password1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">adress</label>
                                <input type="text" class="form-control" id="password2">
                            </div>
                            <div class="mb-3 form-check">
                                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                                <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                            </div>
                            <button type="submit" class="btn btn-primary w-100">save</button>
                        </form>
                        


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
                        <div class="p-2">
                            <p> No account ? <a href="#"><span class="text-primary">Sign up </span></a>here . </p>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </footer>

</body>

</html>