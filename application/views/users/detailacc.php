<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style/acceuil.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
    <script src="<?php echo base_url('assets/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <style>
    </style>
<body>

<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" id="enTete">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <span class="fs-4">Fit-Foods</span>
        </a>
        <ul class="nav nav-pills nav-pills_perso">
          <li class="nav-item"><a href="<?php echo base_url('RegimeController/voirRegime'); ?>" class="nav-link">Acceuil</a></li>
          <li class="nav-item">
            <div class="dropdown text-end" id="boiteDroite">
              <?php if ($this->session->has_userdata("idutilisateur")){ ?>
                <a href="#" class="button btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle"></i> <?= $this->session->userdata("nomutilisateur") ?></a>
              <?php }else{  redirect(base_url()); } ?>
                <ul class="action dropdown-menu text-small">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="<?= site_url("UtilisateurController/logout") ?>">Deconnexion</a></li>
                </ul>
            </div>
          </li>
        </ul>
          

  </header>
</div>  
<div class="container">
  <div class="row">
    <h3>Détail Acceuil</h3>
  </div>
  <br>
    <div class="row">
<!-- REGIME -->
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic">
            <div class="product__item__pic__image">
                    <?php 
                    // var_dump($detailregime['menu']);
                    for($i=0; $i<count($detailregime['menu']); $i++) {?>
                        <img src="<?= base_url("assets/img/detailimg/".$detailregime['menu'][$i]['photomenu']) ?>" alt="" >
                    <?php } ?>
                  </div>
                  <div>
                    <ul class="product__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="product__item__text">
                  <h6 class="step-title">Régime quantité: <?php echo $detailregime['quantite']; ?></h6>
                  <h6 class="step-title-activ"><?php echo $detailregime['quantite']; ?></h6>
                  <h6 class="step-title-activ"><?= $detailregime['activite']['nomactivite']?></h6>
            </div>
          </div>
      </div>

  </div>
</div>
<!-- ROW OF REGIME -->

</body>
</html>