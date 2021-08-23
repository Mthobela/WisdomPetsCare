<?php
require_once ('db_connection.php');

if(isset($GET['token'])){
    $token = $GET['token'];
    resetPassrod($token);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wisdom Pets</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- style -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- javascript -->
    <script src="../assets/js/main.js" defer></script>



    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>



</head>
<body style="background-image: linear-gradient(to right, #ec77ab 0%, #7873f5 100%);">
<main id="main">

<div class="container">
    <h2 class="text animated bounce text-center text-white mt-4"> CATEGORIES </h2>
    <div class="row mt-4 pb-2">

        <div class="col-sm-3">
            <div class="card p-2 border-secondary mb-2">
                <img class="card-img-top" src="../assets/img/petsimages/categories/dogs/Presentation.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">DOGS 🐕</h4>
                    <a href="../services/dogs.php" class="btn btn-primary">Afford Dogs</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card p-2 border-secondary mb-2">
                <img class="card-img-top" src="../assets/img/petsimages/categories/cats/Presentation.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">CATS 🐈</h4>
                    <a href="" class="btn btn-primary">Afford Cats</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card p-2 border-secondary mb-2">
                <img class="card-img-top" src="../assets/img/petsimages/categories/birds/Presentation.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">BIRDS 🦜</h4>
                    <a href="#" class="btn btn-primary">Afford Birds</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card p-2 border-secondary mb-2">
                <img class="card-img-top" src="../assets/img/petsimages/categories/horses/Presentation.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">HORSES 🐎</h4>
                    <a href="#" class="btn btn-primary">Afford Horses</a>
                </div>
            </div>
        </div>

    </div>
</div>
</main>

</body>
</html>

















