<?php
$navbar = true;
$title = "read";
include 'header.php';
include 'model.php';
$model = new Contact();
$id = $_REQUEST['read'];
$rows = $model->afficherSeule($id);
echo "<pre>";
// print_r($rows);
echo $id;

echo "</pre>";

if (!empty($rows)) {
    foreach ($rows as $row) { ?>
        <div>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">read contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card ">
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
<?php }
} ?>

<?php include 'footer.php' ?>