<?php
$title = "profile";
$navbar = true;
include 'header.php';
?>
<div class="p-4">
    <div class="container p-3" id="intro">


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
                <?php include 'model.php';
                $model = new Contact();
                $insert = $model->insert();
                $rows = $model->fetch();
                
                // $id = $_GET['supermer'];
                // $supermer = $model->suprimer() ;

                // 
                echo "<pre>";
                // print_r($rows);
                echo "</pre>";
                $i = 1;
                if (!empty($rows)) {
                    foreach ($rows as $row) {


                ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['NAME'] ?></td>
                            <td><?php echo $row['EMAIL'] ?></td>
                            <td><?php echo $row['PHONE'] ?></td>
                            <td><?php echo $row['ADRESS'] ?></td>
                            <td>
                                <div class="d-flex ">
                                    <a href="delet.php?edit=<?= $row['ID']; ?>" class="badge bg-primary text-decoration-none m-1">Edit</a>
                                    <a href="delet.php?delet=<?= $row['ID']; ?>" class="badge bg-danger text-decoration-none m-1">Delet</a>
                                    <a href="delet.php?supermer=<?= $row['ID']; ?>" class="badge bg-danger text-decoration-none m-1">supermer</a>
                                    <a href="read.php?read=<?= $row['ID']; ?>" class="badge bg-info text-decoration-none m-1">read</a>

                                </div>
                                <!-- // pour le model -->
                                <div class="d-flex ">
                                    <button data-bs-toggle="modal" data-bs-target="#editcontact<?= $row['ID'] ?>" class="badge bg-primary text-decoration-none m-1">Edit</button>
                                    <button data-bs-toggle="modal" data-bs-target="#raedcontact<?= $row['ID'] ?>" class="badge bg-info text-decoration-none m-1">read</button>
                                </div>
                            </td>
                            <?php $modifier = $model->modifier($row['ID']) ; ?>
                        </tr>
                        <!--//***** */  Modal read contact ********-->

                        <div class="modal fade" id="raedcontact<?= $row['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">read contact</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card " >
                                            <img src="Google_Contacts_icon.svg.webp" class="card-img-top w-50 mx-auto" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-center"><?php echo $row['NAME'] ?></h5>
                                                <p class="card-text text-center"><?php echo $row['EMAIL'] ?></p>
                                                <p class="card-text text-center"><?php echo $row['PHONE'] ?></p>
                                                <p class="card-text text-center"><?php echo $row['ADRESS'] ?></p>
                                                <div class="text-center">
                                                <a href="#" class="btn btn-primary">Appeler</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->

                                <!-- //? edit contact modal -->
                                        <div class="modal fade" id="editcontact<?= $row['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">read contact</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">
                            <div class="d-flex ">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['NAME'] ?>" id="email" aria-describedby="emailHelp">
    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $row['EMAIL'] ?>" id="email" aria-describedby="emailHelp">
    
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">phone</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo $row['PHONE'] ?>" id="phone">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">adress</label>
                                <input type="text" class="form-control" value="<?php echo $row['ADRESS'] ?>" name="adress" id="adress">
                            </div>
                            <!-- <div class="mb-3 form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label> 
                            </div> -->
                            <button type="submit" name="edit" class="btn btn-primary w-100">save</button>
                        </form>



                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->
                <?php
                    }
                }
                ?>
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


                <form method="POST">
                    <div class="d-flex ">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="email" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">adress</label>
                        <input type="text" class="form-control" name="adress" id="adress">
                    </div>
                    <div class="mb-3 form-check">
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                        <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100">save</button>
                </form>



            </div>

        </div>
    </div>
</div>
<!--  -->

</div>
</div>
<?php include 'footer.php' ?>