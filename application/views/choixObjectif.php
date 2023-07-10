<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectif</title>
</head>
<link href="<?= base_url("assets/style/style.css") ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
<body>
  
    <div class="container" id="boite">
        <h3>Passons aux choix de vos objectifs</h3><br>
        <div class="container">
            <p>Choisissez votre au objectif : </p><br>
            <div class="row" id="ligne" style="">
                <a class="col-md-3" id="title" href="#">
                    <i class="fas fa-walking" id="symbole"></i>
                    <p>Perdre du poids</p>
                </a>
                <a class="col-md-3" id="title" href="#">
                    <i class="fas fa-star" id="symbole"></i>
                    <p>Augmenter son poid</p>
                </a>
                <a class="col-md-3" id="title" href="#">
                    <i class="fas fa-smile" id="symbole"></i>
                    <p>Moyen</p>
                </a>
            </div>
        </div>
        <button class="btn btn-primary"></button>
    </div>

</body>
</html>