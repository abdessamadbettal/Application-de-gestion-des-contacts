<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Contact list</a>
              <div>
                  <?php if($navbar == true) :?>
                <a class="navbar-brand fs-6" href="profile.php">Alex</a>
                <a class="navbar-brand fs-6" href="contact.php">contact</a>
                <a class="navbar-brand fs-6" href="index.php">logout</a>
                <?php else :?>
                 <a class="navbar-brand fs-6" href="profile.php">Login</a>
                 <?php endif ;?>
              </div>
              
            </div>
          </nav>

    </header>
    <main>